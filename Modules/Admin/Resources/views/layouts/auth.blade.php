<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('images/testvine-logo-green.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/style.css') }}">
    <title>@yield('title') | {{ config('app.name') }} Admin Module</title>
    @datatableScript
</head>

<body class="bg-gray-100">
    {{-- start navbar --}}
    @auth('admin')
        @include('admin::layouts.navbar')
    @endauth
    {{-- end navbar --}}

    {{-- strat wrapper --}}
    <div class="h-screen flex flex-row flex-wrap">
        {{-- start sidebar --}}
        @auth('admin')
            @include('admin::layouts.sidebar')
        @endauth
        {{-- end sidbar --}}

        {{-- strat content --}}
        <div class="bg-gray-100 flex-1 p-6 md:mt-16 max-w-full">
            <div id="datatablecruds">
                @yield('content')
            </div>
        </div>
        {{-- end content --}}
    </div>
    {{-- end wrapper --}}
    {{-- script --}}
    @auth('admin')
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
        <script src="{{ asset('assets/admin/js/scripts.js') }}"></script>
    @endauth
    {{-- end script --}}
</body>

</html>
