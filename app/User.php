<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // add to password bcrypt
    public function setPasswordAttribute($password){  
        $this->attributes['password'] = bcrypt($password);
    }

    // realated User model with Post model
    public function post(){
        return $this->hasMany(Post::class);
    }
    public function publish(Post $post){
        $this->post()->save($post);
    }

    // related User model with comment model
    public function comment(){
        return $this->hasMany(Comment::class);
    }
}
