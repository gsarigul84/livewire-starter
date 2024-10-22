{{--  This is the blank layout for pages which don't need menu, header and similar components. Like authentication pages --}}
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? config('app.name') }}</title>
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    @filamentStyles
    @vite('resources/css/app.css')
</head>
<body class="h-full w-full">
{{ $slot }}
@filamentScripts
@vite('resources/js/app.js')
</body>
</html>
