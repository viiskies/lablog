<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Post;
use App\Comment;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    
    public function showAll() {
        $posts = Post::orderBy('id', 'desc')->paginate(10);
        return view('posts.all', ['posts' => $posts]);
    }
    
    public function create() {
        return view('posts.create');
    }
    
    public function delete( $pageid ) {
        $post = Post::findOrFail( $pageid );
        // $deletedComments = Comment::where( 'post_id', $pageid )->delete();
        $deletedComments = $post->comments()->delete();
        // dd($deletedComments);
        $post = Post::destroy( $pageid );
        return redirect()->action('PostsController@showAll');
    }
    
    public function edit( $pageid ) {
        $post = Post::findOrFail( $pageid );
        return view('posts.edit', ['post' => $post]);
    }
    
    public function update( StorePostRequest $request, $pageid ) {
        $post = Post::findOrFail( $pageid )->update(
            ['title' => $request->get('title'), 'content' => $request->get('content'), 'date' => date('Y-m-d')]
        );
        $posta = Post::findOrFail( $pageid );
        // $comments = Comment::where( 'post_id', $pageid )->get();
        return view('posts.single', ['post' => $posta, 'comments' => $posta->comments]);
    }
    
    public function store( StorePostRequest $request ) {
        $post = Post::create( $request->except('_token') + [ 'date' => Carbon::now() ] );
        return redirect()->action('PostsController@showAll');
    }
    
    public function showSingle( $pageid ) {
        $post = Post::findOrFail( $pageid );
        // $comments = Comment::where( 'post_id', $pageid )->get();
        return view('posts.single',  
            [ 'post' => $post, 'comments' => $post->comments ] 
        );
            
    }
        
}