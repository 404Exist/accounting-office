<?php

if (!function_exists('admin')) {
    function admin(): \Illuminate\Contracts\Auth\Authenticatable|null
    {
        return auth("admin")->user();
    }
}

if (!function_exists('getSetting')) {
    function getSetting(string $key, string $dafault = "")
    {
        return app('site_settings')->get($key) ?? $dafault;
    }
}

if (!function_exists('getText')) {
    function getText(string $key)
    {
        return json_decode(app('site_texts')->get($key))->{app()->getLocale()}
        ?? str($key)->headline();
    }
}

if (!function_exists('getPageImage')) {
    function getPageImage(int $order, string $key = "url", string $pageRouteName = null)
    {
        $pageRouteName ??= \Illuminate\Support\Facades\Route::currentRouteName();
        return app('site_images')->where('page_name', $pageRouteName)->where('order', $order)->first()?->{$key};
    }
}
