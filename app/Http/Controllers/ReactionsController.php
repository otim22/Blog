<?php

namespace App\Http\Controllers;

use App\Post;
use App\Reactions;

class ReactionsController extends Controller
{
    public function store(Post $post)		
    {
    	$this->validate(request(), ['body' => 'required|min:2']);
    	
    	$post->addReaction(request('body'));

    	return back();
    }
}
