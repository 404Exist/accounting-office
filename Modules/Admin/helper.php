<?php

if (!function_exists('admin')) {
    function admin(): \Illuminate\Contracts\Auth\Authenticatable|null
    {
        return auth("admin")->user();
    }
}

if (!function_exists('getSetting')) {
    function getSetting(string $key)
    {
        return app('site_settings')->get($key);
    }
}

if (!function_exists('getText')) {
    function getText(string $key)
    {
        return json_decode(app('site_texts')->get($key))->{app()->getLocale()}
            ?? str($key)->headline();
    }
}
