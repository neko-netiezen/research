<x-app-layout>
    <x-slot name="diary">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('日記') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>diary</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
        </body>
    </html>
</x-app-layout>