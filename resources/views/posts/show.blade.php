<x-app-layout>
    <x-slot name="show">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('show') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <h1 class='content_title'>
                {{ $post->title }}
            </h1>
            <div class="content">
                <div class="content__post">
                    <h3>本文</h3>
                    <p>{{ $post->body }}</p>    
                </div>
            </div>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
            <div class="edit"><a href="/posts/{{ $post->id }}/edit">edit</a></div>
        </body>
    </html>
    
</x-app-layout>