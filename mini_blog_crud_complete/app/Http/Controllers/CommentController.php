<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $post = Post::find($request->post_id);
        
        $comment = new Comment();
        $comment->message = $request->message;

        $post->comments()->save($comment);
        
        return redirect(route("posts-show", [ "id" => $post->id ]));
    }
}
