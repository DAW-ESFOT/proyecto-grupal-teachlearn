<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;
use App\Http\Resources\Tutorial as TutorialResource;
use App\Http\Resources\TutorialCollection;


class TutorialController extends Controller
{
    private static $messages = [
        'required'=>'El compo: atribute es obligatorio',

    ];
    public function index()
    {
        //return response()->json(new TutorialCollection(Tutorial::all()),200);
        return new TutorialCollection(Tutorial::paginate(10));
    }
    public function show(Tutorial $tutorial)
    {
        return response()->json(new TutorialResource($tutorial),200);
    }
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'hour' => 'required|string',
            'observation'=> 'required|string',
            'topic' =>'required|string',
            'price'=> 'required|string',
            'image'=> 'required|string',
            'duration'=>'required',
            'subject_id' => 'required|exists:subjects,id',

        ]);
        $tutorial = Tutorial::create($request->all());
        return response()->json($tutorial, 201);

    }
    public function update(Request $request, Tutorial $tutorial)
    {
        $request->validate([
            'date' => 'required|date',
            'hour' => 'required|string',
            'observation'=> 'required|string',
            'topic' =>'required|string',
        ],self::$messages);

        $tutorial->update($request->all());
        return response()->json($tutorial, 200);
    }
    public function delete(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->delete();
        return 204;}
}
