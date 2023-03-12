<x-app-layout>
    <x-slot name="index">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('HOME') }}
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
            <div class='inner'>
                <h1 class='title'>ファイト　就活！</h1>
                <div class='circle_parent'>
                    <a href='./group'><p class='circle'><img src="{{ secure_asset('/assets/images/group.png')}}" class='image'></p></a>
                    <a href='./you'><p class='circle'><img src="{{ secure_asset('/assets/images/chat.png')}}" class='image'></p></a>
                    <a href='./me'><p class='circle'><img src="{{ secure_asset('/assets/images/book.png')}}" class='image'></p></a>
                </div>
            </div>
        </body>
    </html>
</x-app-layout>