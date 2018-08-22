<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Repositories\Posts;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }


    public function index(Post $posts){
       // $posts = (new \App\Repositories\Posts)->all();
       //dd($posts);

       $posts = $posts->all();
       //dd($posts);
       //session('message');
        
    /*    
        $posts = Post::latest()
                 ->filter(request('month','year'))
                 ->get();
    */             
        #return $archives;
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
        # Create posts with user id
        auth()->user()->publish(
           new Post(request(['title', 'body']))
        );

        // Flash message
        session()->flash('message', 'Your post has publish!');

        # Create new post
        # to the databases
        # Post::create([
        #    'title'=>request('title'),
        #    'body'=>request('body'),
        #    'user_id'=>auth()->id()
        # ]);
        # redirect to the new loction
        return redirect('/');
    }

}
