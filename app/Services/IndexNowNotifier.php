<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IndexNowNotifier
{
    protected $apiKey;

    protected $keyLocation;

    protected $endpoints;

    public function __construct()
    {
        $this->apiKey = env('INDEXNOW_API_KEY', 'YOUR_API_KEY');
        $this->keyLocation = env('INDEXNOW_KEY_LOCATION', 'https://zarechye.kz/indexnow.txt');

        $this->endpoints = [
            'https://www.yandex.com/indexnow',
            'https://www.bing.com/indexnow',
        ];
    }

    public function notify(array $urls, string $host)
    {
        $data = [
            'host'        => $host,
            'key'         => $this->apiKey,
            'keyLocation' => $this->keyLocation,
            'urlList'     => $urls,
        ];

        foreach ($this->endpoints as $endpoint) {
            try {
                $response = Http::withHeaders([
                    'Content-Type' => 'application/json; charset=utf-8',
                ])->post($endpoint, $data);

                Log::info("IndexNow уведомление отправлено на: {$endpoint}. HTTP код: " . $response->status());
                Log::info("Ответ сервера: " . $response->body());
            } catch (\Exception $e) {
                Log::error("Ошибка при отправке уведомления на {$endpoint}: " . $e->getMessage());
            }
        }
    }
}
