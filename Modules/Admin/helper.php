<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

if (!function_exists('admin')) {
    function admin(): \Illuminate\Contracts\Auth\Authenticatable|null
    {
        return auth("admin")->user();
    }
}

if (!function_exists('getKeySetting')) {
    function getKeySetting(string $key, string $dafault = null)
    {
        return app('site_settings')?->get($key) ?? $dafault;
    }
}

if (!function_exists('getKeyText')) {
    function getKeyText(string $key)
    {
        return app('site_texts')?->get($key)[app()->getLocale()]
            ?? str($key)->headline();
    }
}

if (!function_exists('removeHtmlTagsFromStr')) {
    function removeHtmlTagsFromStr(string $string)
    {
        return preg_replace('/<[^>]*>/', '', $string);
    }
}

if (!function_exists('getPageImage')) {
    function getPageImage(int $order, string $pageRouteName = null, string $key = "url")
    {
        $pageRouteName ??= \Illuminate\Support\Facades\Route::currentRouteName();
        return app('site_images')?->where('page_name', $pageRouteName)->where('order', $order)->first()?->{$key};
    }
}

if (!function_exists('storeFile')) {
    function storeFile(UploadedFile|null $image, string $path = "", string $ext = "webp")
    {
        if ($image) {
            $webp = (string) \Intervention\Image\Facades\Image::make($image->getRealPath())->encode($ext);
            $image_name = pathinfo($image->hashName(), PATHINFO_FILENAME);
            Storage::disk('public')->put("$path/$image_name.$ext", $webp);

            return "$image_name.$ext";
        }

        return null;
    }
}
