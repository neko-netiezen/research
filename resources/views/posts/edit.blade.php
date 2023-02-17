<x-app-layout>
    <x-slot name="edit">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('Edit') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>Edit</title>
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <h1 class="title">編集画面</h1>
            <div class="content"></div>
                <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="content_title">
                    <h2>タイトル</h2>
                    <input type="text" name="post[title]" value="{{ $post->title }}"/>
                </div>
                <div class="content_body">
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body}}">
                </div>
                <input type="submit" value="保存"/>
            </form>
        </body>
    </html>
</x-app-layout>