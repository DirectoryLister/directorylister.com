<!DOCTYPE html>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="{{ mix('js/app.js') }}" defer></script>
<link rel="icon" href="{{ asset('images/favicon.png') }}">
<link rel="stylesheet" href="{{ mix('css/app.css') }}">

<title>Directory Lister</title>

<div id="app" class="min-h-screen font-sans text-gray-900">
    @yield('content')
</div>

@yield('scripts')
