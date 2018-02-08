<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;


class CommentsController extends Controller
{
    public function showSingle($id, $comment_id)
    {
        $comment = Comment::where('id', $comment_id)->limit(1)->get();
        return view('comments.single',  
        [
            'comment' => $comment[0]
            ]);
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