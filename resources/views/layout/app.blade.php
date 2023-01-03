<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}"
    style="--primary-color: {{ getKeySetting('primary_color') }};--secondary-color: {{ getKeySetting('secondary_color') }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="{{ removeHtmlTagsFromStr($title) }} - {{ getKeySetting('app_name') }}">
    <meta property="og:site_name" content="{{ getKeySetting('app_name') }}">
    <meta property="og:description" content="{{ getKeySetting('app_description') }}">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:image" content="{{ getPageImage(3, 'global') }}">
    <meta property="og:image:width" content="1920">
    <meta property="og:image:height" content="1277">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pl_PL">
    <title>{{ removeHtmlTagsFromStr($title) }} - {{ getKeySetting('app_name') }}</title>
    <meta name="description" content="{{ getKeySetting('app_description') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ getPageImage(1, 'global') }}">
    <link rel="canonical" href="{{ config('app.url') }}" />
    @laravelPWA
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="pageLoader"
        class="position-fixed top-0 end-0 start-0 bottom-0 z-100 d-flex justify-content-center align-items-center bg-primary-color"
        style="z-index: 100;">
        <div class="spinner-border text-white" role="status"
            style="--bs-spinner-width: 8rem; --bs-spinner-height: 8rem;">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    @include('layout.navbar', ['theme' => $theme ?? 'light'])
    @yield('content')
    @include('layout.footer')
</body>

</html>
