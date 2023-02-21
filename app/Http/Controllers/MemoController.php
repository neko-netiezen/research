<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Memo;

class MemoController extends Controller
{
    public function memo(Memo $memo)
    {
        return view('memos/memo')->with(['memos' => $memo->get()]);
    }
    
    public function submit(Memo $submit)
    {
        return view('memos/submit')->with(['memos' => $submit->get()]);
    }
}
