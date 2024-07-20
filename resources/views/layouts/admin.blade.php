<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="robots" content="noindex">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('CLIENT_NAME', 'Ru System') }}</title>
    <link href="{{ asset('css/ru.css') }}" rel="stylesheet" type="text/css">
    @yield('scripts')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    @yield('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> 
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('css/ru.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    @yield('content')
</body>
</html>