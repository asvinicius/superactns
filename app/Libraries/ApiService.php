<?php

namespace App\Libraries;

class ApiService {
    protected string $url;

    public function __construct() {
        $this->url = 'http://localhost:3000/api/v1/';
    }

    protected function headers(bool $withAuth = true): array {
        $headers = ['Content-type: application/json'];
        if($withAuth) {
            $token = session()->get('token');
            if($token) {
                $headers[] = 'Authorization: Bearer '.$token;
            }
        }
        return $headers;
    }

    public function request(string $method, string $endpoint, array $payload, bool $withAuth): array {

        $ch = curl_init($this->url.$endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers($withAuth));

        if(!empty($payload)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
        }

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            curl_close($ch);

            return [
                'success' => false,
                'status'  => 500,
                'data'    => ['error' => 'Serviço indisponível: ' . $error],
            ];
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $data = json_decode($response, true);

        return [
            'success' => $httpCode >= 200 && $httpCode < 300,
            'status'  => $httpCode,
            'data'    => $data,
        ];
    }
}