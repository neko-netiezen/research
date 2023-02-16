<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function you(Post $post)
    {
        return view('posts/you')->with(['posts' => $post]);
    }
    
    public function management(Post $post)
    {
        return view('posts/management')->with(['posts' => $post]);
    }
    
    public function group(Post $post)
    {
        return view('posts/group')->with(['posts' => $post->get()]);
    }
    
    public function me(Post $post)
    {
        return view('posts/me')->with(['posts' => $post]);
    }
}
?>