<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Post;

class HomeController extends Controller
{
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $posts = Post::limit(10)->get();
        // $posts = Post::all();
        // $post = Post::where('id', 110)->get();
        // $somePosts = Post::where('id', '>', 110)->get();
        // $posties = Post::where('id', '>', 110)->where('id', '<', 105)->get();

        // $post = new Post();
        // $post->title = 'My post';
        // $post->content = 'Yayayayyaya';
        // $post->date = '2017-08-08';
        
        // $post->save();
        // dump($posts);
        
        return view('index', ['posts' => $posts]);
    }
    
}
