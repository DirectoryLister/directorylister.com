<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="{{ asset('images/favicon.png') }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:300,400&display=swap">

@vite(['resources/css/app.css', 'resources/js/app.js'])

<title>Directory Lister &bull; The Simple (PHP) Web Directory Lister</title>

<div id="app" class="font-sans text-slate-900 antialiased">
    @yield('content')
</div>

@stack('scripts')

@includeWhen(app()->isProduction(), 'partials.analytics')
