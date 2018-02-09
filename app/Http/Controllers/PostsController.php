<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Post;
use App\Comment;

class PostsController extends Controller
{

    public function showAll()
    {
        $posts = Post::all();
        
        return view('posts.all', ['posts' => $posts]);
    }
    
    public function create()
    {
        return view('posts.create');
    }
    
    public function edit()
    {
        return view('posts.edit');
    }
    
    public function showSingle($pageid)
    {
        $post = Post::where('id', $pageid)->limit(1)->get();
        $comments = Comment::where('post_id', $pageid)->get();

        return view('posts.single',  
            [
                'post' => $post[0],
                'comments' => $comments
            ]);
        
    }
    
}
