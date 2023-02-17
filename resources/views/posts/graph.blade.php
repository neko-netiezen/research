<x-app-layout>
    <x-slot name="graph">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('graph') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>graph</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <p>graph</p>
        </body>
    </html>
</x-app-layout>