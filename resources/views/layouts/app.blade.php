<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="{{ asset('images/favicon.png') }}">

@vite(['resources/scss/app.scss', 'resources/js/app.js'])

<title>Directory Lister &bull; The Simple (PHP) Web Directory Lister</title>

<div id="app" class="font-sans text-gray-900 antialiased">
    @yield('content')
</div>

@yield('scripts')
