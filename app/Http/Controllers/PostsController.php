<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }
    public function show(Post $post){
        return view('posts.show', compact('post'));
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        #dd(request()->all());

        # validate value
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
        # Create new post
        # to the databases
        Post::create([
            'title'=>request('title'),
            'body'=>request('body')
        ]);
        # redirect to the new loction
        return redirect('/');
    }
}
