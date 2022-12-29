{{-- Web Application Manifest --}}
<link rel="manifest" href="{{ route('laravelpwa.manifest') }}">
{{-- Chrome for Android theme color --}}
<meta name="theme-color" content="{{ $config['theme_color'] }}">

{{-- Add to homescreen for Chrome on Android --}}
<meta name="mobile-web-app-capable" content="{{ $config['display'] == 'standalone' ? 'yes' : 'no' }}">
<meta name="application-name" content="{{ $config['short_name'] }}">

{{-- Add to homescreen for Safari on iOS --}}
<meta name="apple-mobile-web-app-capable" content="{{ $config['display'] == 'standalone' ? 'yes' : 'no' }}">
<meta name="apple-mobile-web-app-status-bar-style" content="{{  $config['status_bar'] }}">
<meta name="apple-mobile-web-app-title" content="{{ $config['short_name'] }}">


{{-- Tile for Win8 --}}
<meta name="msapplication-TileColor" content="{{ $config['background_color'] }}">

<script type="text/javascript">
    // Initialize the service worker
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('/serviceworker.js', {
            scope: '.'
        }).then(function (registration) {
            // Registration was successful
            // console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
        }, function (err) {
            // registration failed :(
            // console.log('Laravel PWA: ServiceWorker registration failed: ', err);
        });
    }
</script>
