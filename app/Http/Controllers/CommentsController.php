<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

class CommentsController extends Controller
{  
    public function store(Post $post){
         // validate comment
         $this->validate(request(),['body' => 'required|min:2']);
         // add comment to the post
         $post->addComment(request('body'));
         return back();
    }
   
}

