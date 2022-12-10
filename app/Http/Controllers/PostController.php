<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // FIND FIRST POST FROM AUTHORNAME

        $post = Post::where('author_name','jakson')->first();

        // dd($post->comment);
        // dd($post->comment->comment);

        // FIND POST FROM Comment

        $comment = Comment::find(1);

        // dd($comment->post);
        // dd($comment->post->title);
        echo $comment;
    }
}
