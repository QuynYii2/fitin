<?php

use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use GuzzleHttp\Client;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\web\PostController;
use \App\Http\Controllers\web\HomeController;

Route::middleware('check-detect-bot')->group(function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('danh-muc/{slug}', [HomeController::class, 'category'])->name('category');
    Route::get('page/{slug}', [PostController::class, 'detailPage'])->name('detail-page');
    Route::get('huong-dan-trai-nghiem', [PostController::class, 'experience'])->name('experience');
    Route::get('khoi-nguon-cam-hung', [PostController::class, 'new'])->name('new');
    Route::get('bai-viet/{slug}', [PostController::class, 'post'])->name('post');
    Route::get('chi-tiet-bai-viet/{slug}', [PostController::class, 'detailPost'])->name('detail-post');

});

Route::post('/update-leave-time', function () {
    $logId = session('visitor_log_id');

    if ($logId) {
        // Cập nhật thời gian rời trang
        \Illuminate\Support\Facades\DB::table('visitor_logs')
            ->where('id', $logId)
            ->update(['leave_time' => \Carbon\Carbon::now(), 'updated_at' => \Carbon\Carbon::now()]);
    }

    return response()->json(['status' => 'success']);
});

Route::post('/get-visit_id', function (\Illuminate\Http\Request $request) {
    $visitId = $request->input('visit_id');

    // Cấu hình Fingerprint API
    $config = Configuration::getDefaultConfiguration("DQlrwxmheDBPxR5yZElg", Configuration::REGION_ASIA);
    $client = new FingerprintApi(new Client(), $config);

    $response = $client->getVisits($visitId);

    // Truy cập trực tiếp vào mảng để lấy thông tin visits
    $visits = $response[0]['visits'];

    // Lấy request_id của lần visit đầu tiên
    $firstVisit = $visits[0];
    $request_id = $firstVisit['request_id'];
    $eventResponse = $client->getEvent($request_id);
    $products = $eventResponse[0]['products'];
    $ip_info = $products['ip_info'];
    $v4 = $ip_info['data']['v4'];
    $geolocation = $v4['geolocation'];
    $vpn = $products['vpn']['data']['result'];

    // Thời gian người dùng vào trang
    $enterTime = Carbon::now();

    // Lưu thông tin vào cơ sở dữ liệu
    $logId = DB::table('visitor_logs')->insertGetId([
        'ip' => $firstVisit['ip'],
        'country' => $geolocation['country']['name'] ?? 'N/A',
        'city' => $geolocation['city']['name'] ?? 'N/A',
        'page' => $firstVisit['url'],
        'enter_time' => $enterTime,
        'created_at' => $enterTime,
        'updated_at' => $enterTime,
    ]);

    session(['visitor_log_id' => $logId]);

    if (in_array($geolocation['country']['name'] ?? '', ['Singapore', 'Indonesia'])) {
        return response()->json(['status' => false]);
    }
    if ($vpn) {
        return response()->json(['status' => false]);
    }
    return response()->json(['status' => true]);
});

Route::get('/home', function () {
    return response()->view('web_bot.layout-bot');
});
