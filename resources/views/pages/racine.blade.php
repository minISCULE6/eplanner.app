<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'eplanner') }} | @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- links local css --->
    <link href="{{ asset('assets/css/theme.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/css/base.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/css/layout.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/css/module.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/css/state.css') }}"  rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<body>
        @include('pages.composants.barre-navigation')
        @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>