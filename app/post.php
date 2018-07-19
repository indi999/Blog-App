<?php

namespace App;

class Post extends Model
{
  public function comments(){
      # has post->comment
      return $this->hasMany(Comment::class);
  }

   // add comment function
   public function addComment($body){
      $this->comments()->create(compact('body'));   
    # Comment::create([
    #     'body' => $body,
    #     'post_id'=> $this->id
    # ]);
    
   }
}
