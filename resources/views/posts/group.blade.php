<x-app-layout>
    <x-slot name="group">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('掲示板') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>group</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='content_title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post"></form>
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $post->id }})">削除する</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <form action="/posts" method="POST">
                @csrf
                <div class="body">
                    <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
                <div class='paginate'>
                    {{ $posts->links() }}
                </div>
                <a href='./create'>create</a>
                <script>
                    function deletePost(id) {
                        'use strict'
                        
                        if (confirm('削除すると復元できません。\n本当に削除しますか?')) {
                            document.getElementById('form_${id}').submit();
                        }
                    }
            </script>
        </body>
    </html>
    
</x-app-layout>