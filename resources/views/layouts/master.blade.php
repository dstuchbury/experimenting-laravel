<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Experimenting | @yield('title', 'Home Page')</title>

    @include('layouts.styles')
</head>
<body>

<div class="app">
    @include('partials.nav')

    <main class="py-4 px-4">
        @yield('content')
    </main>
</div>

@section('footerScripts')
    <script src="{{ asset('js/app.js') }}" defer></script>
@show

</body>
</html>