<x-app-layout>
    <x-slot name="group">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Group') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>group</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <p>group</p>
        </body>
    </html>
</x-app-layout>