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
    public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update($request->all());
        return $comment;
    }
    public function delete(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        return 204;}
}
