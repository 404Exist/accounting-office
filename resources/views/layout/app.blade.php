<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="Biuro rachunkowe Gdańsk - LemonTax | Księgowość nr 1 w Trójmieście">
        <meta property="og:site_name" content="Strefa użytkownika">
        <meta property="og:description" content="Nowoczesne biuro rachunkowe w Gdańsku. Łączymy zalety tradycyjnego biura rachunkowego z narzędziami online XXI wieku. Odkryj nową jakość księgowości w Gdańsku!">
        <meta property="og:url" content="https://www.lemontax.pl/">
        <meta property="og:image" content="https://www.lemontax.pl/lib/mhq85u/zadowolony-klient-LemonTax-fin--k3a2knri.jpg">
        <meta property="og:image:width" content="1920">
        <meta property="og:image:height" content="1277">
        <meta property="og:type" content="website">
        <meta property="og:locale" content="pl_PL">
        <title>Biuro rachunkowe Gdańsk - LemonTax | {{ getSetting('app_name') }}</title>
        <meta name="description" content="Nowoczesne biuro rachunkowe w Gdańsku. Łączymy zalety tradycyjnego biura rachunkowego z narzędziami online XXI wieku. Odkryj nową jakość księgowości w Gdańsku!">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/logo.png') }}">
        <link rel="canonical" href="https://www.lemontax.pl/" />
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        @include('layout.navbar', ["theme" => $theme ?? 'light'])
        @yield('content')
        @include('layout.footer')
    </body>
</html>
