<?php

namespace App;
use Carbon\Carbon;

class Post extends Model
{
  public function comments(){
      # has post->comment
      return $this->hasMany(Comment::class);
  }
  public function user(){
      return $this->belongsTo(User::class);
  }

  
   // add comment function
   public function addComment($body){
      $this->comments()->create(compact('body'));   
    # Comment::create([
    #     'body' => $body,
    #     'post_id'=> $this->id
    # ]);
    
   }

   // filter fro POSTS archives
   public function scopeFilter($query, $filter){
        if($month = request('month')){
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if($year = request('year')){
            $query->whereYear('created_at', Carbon::parse($year)->year);
        }
   }
}
