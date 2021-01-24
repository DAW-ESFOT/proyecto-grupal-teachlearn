<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Http\Resources\CommentCollection;
use Illuminate\Http\Request;
use App\Http\Resources\Comment as CommentResource;

class CommentController extends Controller
{
    public function index()
    {
        return new CommentCollection(Comment::paginate(3));
    }
    public function show(Comment $comment)
    {
        return response()->json(new CommentResource($comment),200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'text'=>'required|string'
        ]);

        $comment = Comment::create($request->all());
        return response()->json($comment, 201);
    }
    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'text'=>'required|string'
        ]);
        $comment->update($request->all());
        return response()->json($comment, 200);
    }
    public function delete(Request $request, Comment $comment)
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}
