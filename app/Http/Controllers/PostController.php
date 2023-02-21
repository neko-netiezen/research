<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts' => $post->get()]);
    }
    
    public function group(Post $post)
    {
        return view('posts/group')->with(['posts' => $post->getPaginateByLimit(4)]);
    }
    
    public function you(Post $post)
    {
        return view('posts/you')->with(['posts' => $post->get()]);
    }
    
    public function me(Post $post)
    {
        return view('posts/me')->with(['posts' => $post->get()]);
    }
    
    public function graph(Post $post)
    {
        return view('posts/graph')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);
    }
    
    public function create()
    {
        return view('posts/create');
    }
    
    public function store(Post $post, Request $request) 
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('/group');
    }
    
    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }
    
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }
    
}
?>