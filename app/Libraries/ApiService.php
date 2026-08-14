<?php

namespace App\Libraries;

class ApiService
{
    protected string $url;

    public function __construct()
    {
        $this->url = 'http://localhost:3000/api/v1/';
    }

    protected function headers(array $auth): array {
        $headers = [];

        $isJson = $auth['isJson'] ?? true;

        if ($isJson) {
            $headers[] = 'Content-type: application/json';
        }
        
        if ($auth['withAuth'] == true) {

            $headers[] = 'Authorization: Bearer ' . $auth['token'];
        }
        return $headers;
    }

    public function request(string $method, string $endpoint, array $payload, array $auth): array {

        $ch = curl_init($this->url . $endpoint);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers($auth));

        if (!empty($payload)) {
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

    public function postMultipart(string $method, string $endpoint, array $fields, array $auth, array $files = []): array {
        $ch = curl_init($this->url . $endpoint);

        $postFields = $fields;

        foreach ($files as $fieldName => $file) {
            if ($file && $file->isValid() && !$file->hasMoved()) {
                $postFields[$fieldName] = new \CURLFile(
                    $file->getTempName(),
                    $file->getClientMimeType(),
                    $file->getClientName()
                );
            }
        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields); // array, sem json_encode
        curl_setopt($ch, CURLOPT_HTTPHEADER, $this->headers($auth)); // sem Content-Type json
        curl_setopt($ch, CURLOPT_TIMEOUT, 15); // arquivos podem demorar mais

        $response = curl_exec($ch);

        if ($response === false) {
            $error = curl_error($ch);
            return [
                'success' => false,
                'status'  => 500,
                'data'    => ['error' => 'Serviço indisponível: ' . $error],
            ];
        }

        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $data = json_decode($response, true);

        return [
            'success' => $httpCode >= 200 && $httpCode < 300,
            'status'  => $httpCode,
            'data'    => $data,
        ];
    }
}
