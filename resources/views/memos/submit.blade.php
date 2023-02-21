<x-app-layout>
    <x-slot name="submit">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('submit') }}
        </h2>
    </x-slot>
    
    <!DOCTYPE HTML>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>submit</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <link rel="stylesheet" href="{{secure_asset('/assets/css/app.css')}}">
        </head>
        <body>
            <form>
                <div class="form-group">
                    <label for="title">タイトル</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group">
                    <label for="content">内容</label>
                    <input type="text" class="form-control" id="content" name="content">
                </div>
                <a href="{{ route('home')}}" class="btn btn-primary">戻る</a>
                <button type="submit" class="btn btn-success">追加</button>
            </form>
        </body>
    </html>
    
</x-app-layout>