<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
// use \stdClass;

class PostsController extends Controller
{

    public function showAll()
    {
        $post1 = new \stdClass();
        $post1->title = 'Lorem, ipsum dolor.';
        $post1->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda maiores porro hic ipsa rem velit reprehenderit nostrum alias, dolorum iste obcaecati animi officiis rerum iusto nihil nesciunt aut quas inventore!';
        // $post1->date = Carbon::createFormFormat('Y-m-d', '2008-12-12');

        $post2 = new \stdClass();
        $post2->title = 'Lorem ipsum dolor, sit amet consectetur adipisicing.';
        $post2->content = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quis exercitationem minus inventore, id nihil ducimus commodi. Id doloribus, aut veniam reiciendis asperiores possimus sit blanditiis. Iste cum sequi accusamus!';
        // $post2->date = Carbon::createFormFormat('Y-m-d', '2008-12-12');

        $post3 = new \stdClass();
        $post3->title = 'Lorem ipsum dolor sit amet consectetur.';
        $post3->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fugiat ratione iusto totam repellat aspernatur, in impedit nesciunt, iste modi ex veniam ullam? Praesentium nemo harum quasi vel cumque dolores.';
        // $post3->date = Carbon::createFormFormat('Y-m-d', '2008-12-12');

        $posts = [$post1, $post2, $post3, $post2, $post3, $post2, $post3, $post2, $post3, $post2, $post3];

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
    
    public function showSingle()
    {
        $post = new \stdClass();
        $post->title = 'Lorem ipsum dolor sit amet consectetur.';
        $post->content = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum fugiat ratione iusto totam repellat aspernatur, in impedit nesciunt, iste modi ex veniam ullam? Praesentium nemo harum quasi vel cumque dolores. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim itaque animi, saepe exercitationem nihil ducimus corporis natus neque quaerat. Est aut temporibus ex molestiae, repellendus minus vero animi facilis nisi quasi possimus repudiandae? Amet corporis quos ipsam numquam eveniet pariatur facere incidunt quae nulla deserunt molestias dicta unde, nisi consectetur! Lorem ipsum dolor sit amet consectetur adipisicing.';
        return view('posts.single',  ['post' => $post]);
        
    }

}
