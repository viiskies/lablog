<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function showAll()
    {
        return view('posts.all');
    }

    public function create()
    {
        return view('posts.create');
    }
    
    public function edit()
    {
        return view('posts.edit');
    }
    
    public function showSingle()
    {
        return view('posts.single');
    }

}
