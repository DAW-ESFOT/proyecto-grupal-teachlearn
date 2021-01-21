<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;
use App\Http\Resources\Tutorial as TutorialResource;
use App\Http\Resources\TutorialCollection;

class TutorialController extends Controller
{
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
        return Tutorial::create($request->all());}
    public function update(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->update($request->all());
        return $tutorial;
    }
    public function delete(Request $request, $id)
    {
        $tutorial = Tutorial::findOrFail($id);
        $tutorial->delete();
        return 204;}
}
