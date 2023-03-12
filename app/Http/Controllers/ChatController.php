<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chat;
use App\Http\Requests\ChatRequest;

class ChatController extends Controller
{
    public function you(Chat $chat)
    {
        return view('chats/you')->with(['chats' => $chat->get()]);
    }
    
    public function store(Chat $chat, Request $request) 
    {
        $input = $request['chat'];
        $chat->fill($input)->save();
        return redirect('/you');
    }
    
    public function edit(Chat $chat)
    {
        return view('chats/edit')->with(['chat' => $chat]);
    }
    
    public function update(ChatRequest $request, Chat $chat)
    {
        $input_chat = $request['chat'];
        $chat->fill($input_chat)->save();

        return redirect('/chats/' . $chat->id);
    }
    
    public function delete(Chat $chat)
    {
        $chat->delete();
        return redirect('/');
    }
}
