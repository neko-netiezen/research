<x-app-layout>
    <x-slot name="memo">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('メモ') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>memo</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <div class='memos'>
                @foreach ($memos as $memo)
                    <div class='memo'>
                        <h2 class='content_title'>
                            <a href="/memos/{{ $memo->id }}">{{ $memo->title }}</a>
                        </h2>
                        <p class='body'>{{ $memo->body }}</p>
                        <form action="/posts/{{ $memo->id }}" id="form_{{ $memo->id }}" method="memo"></form>
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $memo->id }})">削除する</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <form action="/memos" method="POST">
                @csrf
                <div class="body">
                    <textarea name="memo[body]" placeholder="今日も1日お疲れさまでした。">{{ old('memo.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('memo.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
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