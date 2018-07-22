<?php

namespace App;

class Comment extends Model
{
    // has comment->post
    public function post(){
        return $this->belongsTo(Post::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
