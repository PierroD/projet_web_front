<?php

namespace App\Services;

class apiService {

    private static $baseUrl = 'http://localhost:8000/src/';

    public function sendPost($url, $params) {
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, self::$baseUrl.''.$url);
        curl_setopt($request, CURLOPT_POST, 1);
        curl_setopt($request, CURLOPT_POSTFIELDS,
                    $params);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec($request);
        curl_close ($request);
        return json_decode($server_output);
    }

    public function sendGet($url) {
        $client = curl_init(self::$baseUrl.''.$url);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($client);
        return json_decode($response);
    }
}