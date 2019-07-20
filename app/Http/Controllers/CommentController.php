<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function getAllComments(){
        $comments = Comment::all('movie_id', 'user', 'comment');
        return response()->json([
            'code' => 200,
            'message' => "OK",
            'data' => $comments
        ]); 
    }

    public function createComment(Request $request){
        Comment::create([
            'movie_id'=>$request->movie_id,
            'user'=>$request->user,
            'comment'=>$request->comment,
        ]);

        return response()->json([
            'code' => 201,
            'message' => 'Success Comment Created'
        ]);
}
}