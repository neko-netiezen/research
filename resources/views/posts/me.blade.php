<x-app-layout>
    <x-slot name="me">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('管理') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>me</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        </head>
        <body>
            <div id='calendar'></div>
        </body>
        <a href='/calendars/calendar.blade.php'>calendar</a>
        <a href='./diary'>diary</a>
        <a href='/memo'>memo</a>
    </html>
</x-app-layout>