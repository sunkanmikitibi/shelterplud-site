<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends Controller
{
    //
    public function store(Request $request, $post_id)
    {
        $this->validate($request, 
            [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'comment' => 'required|min:5|max:2000',
            ]
            );
            $post = Post::findOrfail($post_id);

            $comment  = new Comment();
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->approved = true;
            $comment->post()->associate($post);

            $comment->save();

            return redirect()->route('blog.details', [$post->slug]);




    }
}
