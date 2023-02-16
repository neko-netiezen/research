<x-app-layout>
    <x-slot name="me">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Me') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>me</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <p>me</p>
        </body>
    </html>
</x-app-layout>