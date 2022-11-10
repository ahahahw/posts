<?php

namespace Secando\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Secando\Posts\Model\Post;

class PostController extends Controller
{

    public function index()
    {
        Post::create([
            'title'=>'test',
        ]);
        $posts = Post::all();
        return view('posts::index',['posts'=>$posts]);

    }
}
