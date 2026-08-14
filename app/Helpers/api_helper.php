<?php

if (!function_exists('api_asset')) {
    function api_asset(string $path): string {
        return rtrim(env('API_BASE_URL'), '/') . '/' . ltrim($path, '/');
    }
}