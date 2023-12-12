<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <title>{{ config('app.name') }} - Online Invoice Builder</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    @livewireStyles
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="dark:screen:bg-gray-950 text-gray-700 dark:text-white text-sm print:text-xs">
{{ $slot }}
@livewireScriptConfig
@stack('scripts')
</body>
</html>
