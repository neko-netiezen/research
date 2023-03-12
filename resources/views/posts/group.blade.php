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
            <link rel="stylesheet" href="{{secure_asset('/assets/css/group.css')}}">
        </head>
        <body>
          　<div class='boardWrapper'>
              　<section>
                  　<article>
                      　<div class="wrapper">
                          　<div class="posts">
                          　     @foreach ($posts as $post)
                          　         <div class="post">
                                      　<p class="username">名前：：{{ $post->username }} {{ $post->updated_at }}</p>
                                    </div>
                                    <p class="comment">{{ $post->comment }}</p>
                                @endforeach
                          　</div>
                      　</div>
                  　</article>
              　</section>
              　<form action="/group" class="formWrapper" method="POST">
              　     @csrf
                  　<div>
                      　<label for="">名前：</label>
                      　<input type="text" name="post[username]">
                  　</div>
                  　<div>
                      　<textarea class="commentTextArea" name="post[comment]" placeholder="コメントを入力"></textarea>
                      　<input type='submit' value='書き込む'>
                  　</div>
              　</form>
          　</div>
        </body>
    </html>
    
</x-app-layout>