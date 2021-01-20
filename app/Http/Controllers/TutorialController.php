<?php

namespace App\Http\Controllers;

use App\Tutorial;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    public function index()
    {
        return Tutorial::all();
    }
    public function show($id)
    {
        return Tutorial::find($id);
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
