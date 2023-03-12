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
            <a href='./calendar'>カレンダー</a>
            <a href='/diary'>日記</a>
            <a href='/memo'>メモ</a>
        </body>
    </html>
</x-app-layout>