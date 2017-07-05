<?php

namespace App;

class Post extends Model
{
    public function reactions()
    {
    	return $this->hasMany(Reaction::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function addReaction($body)
    {
    	$this->reactions()->create(compact('body'));
    }
}
