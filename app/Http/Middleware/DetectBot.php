<?php

namespace App\Http\Middleware;

use Closure;
use Fingerprint\ServerAPI\Api\FingerprintApi;
use Fingerprint\ServerAPI\Configuration;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
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

        foreach ($botUserAgents as $bot) {
            if (strpos($userAgent, $bot) !== false) {
                session(['is_bot' => true]);
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

        return $next($request);
    }
}
