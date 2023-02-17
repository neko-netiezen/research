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
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <h1>Blog Name</h1>
            <div class='posts'>
                @foreach ($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                        </h2>
                        <p class='body'>{{ $post->body }}</p>
                    </div>
                @endforeach
            </div>
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
            <a href='./create'>create</a>
        </body>
    </html>
    
</x-app-layout>