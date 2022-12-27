<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('images/testvine-logo-green.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <title>@yield('title') | {{ config('app.name') }} Admin Module</title>
    @vite('Resources/assets/css/app.css', 'build-admin')
</head>

<body class="bg-gray-100">
    <section class="h-screen">
        @if (session()->has("status"))
            <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 absolute top-0 left-0 right-0" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path
                        d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z" />
                </svg>
                <p>{{ session()->get('status') }}</p>
            </div>
        @endif
        <div class="px-6 h-full text-gray-800 flex flex-row-reverse items-center justify-center">
            <div class="xl:w-5/12 lg:w-5/12 md:w-8/12 mb-12 md:mb-0 bg-white p-6">
                <h1 class="mb-6 text-2xl text-center">Testvine Admin Module</h1>
                @yield('content')
            </div>
        </div>
    </section>
</body>

</html>
