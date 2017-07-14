<?php

namespace App\Http\Controllers;


use App\Post;


class PostsController extends Controller
{
    public function __constuct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->get()->all();

    	return view('posts.index', compact('posts'));
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function show(Post $post)
    {
    	return view('posts.show', compact('post'));
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create(request(['title', 'body']));

        // Post::create([
        //     'title' => request('title'),
        //     'body' => request('body'),
        //     'user_id' => auth()->id()
        // ]);


    	return redirect('/');
    }
    
}
