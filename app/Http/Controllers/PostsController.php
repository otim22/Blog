<?php

namespace App\Http\Controllers;


use App\Post;
use Carbon\Carbon;


class PostsController extends Controller
{
    public function __constuct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        // $posts = Post::latest()->get();
        $posts = Post::latest()
                    ->filter(request(['month', 'year']))
                    ->get();

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

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        ); 

        sesson()->flash(
            'message', 'Your post has been published'
        );

    	return redirect('/');
    }
    
}
