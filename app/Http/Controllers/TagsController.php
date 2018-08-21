<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Tag;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
        dd($tag);
        return $tag;
    }
}
