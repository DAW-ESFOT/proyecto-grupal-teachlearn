<?php

namespace App\Http\Controllers;

use App\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        return Subject::all();
    }
    public function show($id)
    {
        return Subject::find($id);
    }
    public function store(Request $request)
    {
        return Subject::create($request->all());}
    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        return $subject;
    }
    public function delete(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return 204;}
}
