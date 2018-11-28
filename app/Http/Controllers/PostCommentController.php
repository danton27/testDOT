<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Comment;
class PostCommentController extends Controller
{
    public function store(Request $request, $id){
        $post = Post::find($id);
        $this->validate(request(),[
           'message' => 'required'
        ]);
        Comment::create([
           'user_id' => auth()->id(),
           'post_id' =>  $post->id,
            'message' => $request->message
        ]);
        return redirect()->back();
    }
}
