<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests\StoreCommentRequest;


class CommentsController extends Controller
{
    public function showSingle($id, $comment_id) {
        $comment = Comment::where('id', $comment_id)->limit(1)->get();
        return view('comments.single', [ 'comment' => $comment[0] ]);
        }
    
    // public function create() {
    //     return view('posts.single');
    // }

    public function store( StoreCommentRequest $reqCom, $post_id ) {
        $comment = Comment::insert( 
            [
                'name' => $reqCom->get('cname'), 
                'content' => $reqCom->get('content'), 
                'date' => date('Y-m-d'), 
                'post_id' => $post_id
            ]
        );
        return redirect()->action('PostsController@showSingle', ['id' => $post_id]);
    }
}
    
    // name     /varchar 50
    // content  /text
    // date     /date
    // post_id  /int
    // id       /int ai
    
    
    // title    /varchar 50
    // content  /text
    // date     /date
    // id       /int ai