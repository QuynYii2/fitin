<?php

namespace App\Http\Middleware;

use App\Models\SettingModel;
use Closure;
use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Response;

class DetectBot
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $botUserAgents = [
            'googlebot', 'bingbot', 'slurp', 'duckduckbot', 'baiduspider',
            'yandexbot', 'sogou', 'exabot', 'facebot', 'ia_archiver'
        ];

        $userAgent = strtolower($request->header('User-Agent'));
        $setting = SettingModel::first();

        foreach ($botUserAgents as $bot) {
            if (strpos($userAgent, $bot) !== false) {
                session(['is_bot' => true]);
                if ($setting && $setting->url_301) {
                    return redirect()->away($setting->url_301)->setStatusCode(301);
                }
                return $next($request);
            }
        }

        // Kiểm tra nguồn truy cập (Google hoặc quảng cáo)
        $referer = $request->headers->get('referer');

        // Nếu người dùng đến từ Google
        if (strpos($referer, 'google.com') !== false) {
            return $next($request);
        }

        // Nếu người dùng đến từ quảng cáo
        if (strpos($referer, 'utm_source=ad') !== false) {
            return response()->view('advertisement');
        }

        $ip = $request->header('CF-Connecting-IP') ?? $request->ip();
        $response = Http::get("http://ip-api.com/json/{$ip}");

        if ($response->successful()) {
            $location = $response->json();
            $country = $location['countryCode'] ?? 'UNKNOWN';
            $allowedCountries = ['VN', 'KH', 'PH'];
            if (!in_array($country, $allowedCountries)) {
                if ($setting && $setting->url_301) {
                    return redirect()->away($setting->url_301)->setStatusCode(301);
                }
                return response()->view('advertisement');
            }

            $firstVisit = [
                'ip' => $ip,
                'url' => $request->url(),
            ];

            $geolocation = [
                'country' => ['name' => $location['country'] ?? 'N/A'],
                'city' => ['name' => $location['city'] ?? 'N/A'],
            ];

            $enterTime = now();

            // Lưu thông tin vào bảng visitor_logs
            $logId = DB::table('visitor_logs')->insertGetId([
                'ip' => $firstVisit['ip'],
                'country' => $geolocation['country']['name'],
                'city' => $geolocation['city']['name'],
                'page' => $firstVisit['url'],
                'enter_time' => $enterTime,
                'created_at' => $enterTime,
                'updated_at' => $enterTime,
            ]);

            // Lưu ID vào session để theo dõi
            session(['visitor_log_id' => $logId]);

            return $next($request);
        }

        return $next($request);
    }
}
