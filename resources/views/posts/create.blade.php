<x-app-layout>
    <x-slot name="creaate">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <div class="back">[<a href="/">戻る</a>]</div>
        </body>
    </html>
    
</x-app-layout>