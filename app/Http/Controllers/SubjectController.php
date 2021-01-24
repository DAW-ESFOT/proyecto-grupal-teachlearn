<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;
use App\Http\Resources\Subject as SubjectResource;

class SubjectController extends Controller
{

    private static $messages = [
        'required'=>'El campo: atribute es obligatorio',
    ];
    public function index()
    {
        return Subject::all();
    }
    public function show(Subject $subject)
    {
        return response()->json(new SubjectResource($subject),200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'level' => 'required|string',
        ], self::$messages);

        $subject = Subject::create($request->all());
        return response()->json($subject, 201);
    }
    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'level' => 'required|string',
        ],self::$messages);
        $subject->update($request->all());
        return response()->json($subject, 200);
    }
    public function delete(Request $request, Subject $subject)
    {
        $subject->delete();
        return response()->json(null, 204);
    }

}
