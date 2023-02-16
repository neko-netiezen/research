<x-app-layout>
    <x-slot name="you">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('You') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>you</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <p>you</p>
        </body>
    </html>
</x-app-layout>