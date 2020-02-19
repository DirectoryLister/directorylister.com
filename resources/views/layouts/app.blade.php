<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ mix('js/app.js') }}" defer></script>
<link rel="icon" href="{{ asset('images/favicon.png') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<title>Directory Lister &bull; The Simple (PHP) Web Directory Lister</title>

<div id="app" class="font-sans text-gray-900">
    @yield('content')
</div>

@if(app()->isProduction())
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google.analytics_id') }}"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag("js", new Date());

        gtag("config", "{{ config('services.google.analytics_id') }}");
    </script>

    <!-- Google AdSense -->
    <script data-ad-client="ca-pub-1239753369879086" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
@endif

@yield('scripts')
