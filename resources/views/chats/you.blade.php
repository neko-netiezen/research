<x-app-layout>
    <x-slot name="you">
        <h2 class="font-semibold text-x1 text-gray-800 leading-tight">
            {{ __('チャット') }}
        </h2>
    </x-slot>

    <!DOCTYPE html>
    <html lang="ja">
        <head>
            <meta charset="utf-8">
            <title>chat</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="stylesheet" href="./assets/css/chat.css">
        </head>
        <body>
            <div id="room" class="chats">
                <div class="chat">
                    <div class="box-left">
                        <p class="message-box white">はじめまして</p>
                    </div>
        
                    <div class="box-right">
                        <p class="message-box green">はじめまして</p>
                    </div>
                </div>
            </div>
    
            <div class="input-group chat-input">
                <input id="inputMessage" type="text" class="form-control" placeholder="メッセージを入力してください" >
                <div class="input-group-append">
                    <button id="sendBtn" class="btn btn-primary" type="button">送信</button>
                </div>
            </div>
    
      <script src="./assets/js/chat.js"></script>
    </body>
    </html>
    
</x-app-layout>