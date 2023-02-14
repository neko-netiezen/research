<x-app-layout>
    <x-slot name="index">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Index') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>job</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <h1>hello world!</h1>
        </body>
    </html>
</x-app-layout>