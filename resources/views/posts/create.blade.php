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
            <h1>Blog Name</h1>
            <form action="/posts" method="POST">
                @csrf
                <div class="title">
                    <h2>Title</h2>
                    <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
                </div>
                <div class="body">
                    <h2>Body</h2>
                    <textarea name="post[body]" placeholder="今日も１日お疲れ様でした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
            <div class="back">[<a href="/">back</a>]</div>
        </body>
    </html>
    
</x-app-layout>