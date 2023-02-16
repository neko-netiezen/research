<x-app-layout>
    <x-slot name="management">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Management') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>management</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <p>management</p>
        </body>
    </html>
</x-app-layout>