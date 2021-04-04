<?php

namespace App\Http\Controllers\Api;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class Post1 extends Controller
{
    public function show()
    {
        $post = Post::get();
        return response()->json($post, 200);
    }
}
