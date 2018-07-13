<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post; //don't forget this line.

class PostController extends Controller
{
    public function like($id)
    {
        $post = Post::find($id);
        $post->likes = $post->likes+1;
        $post->save();
        return back();
    }
}
