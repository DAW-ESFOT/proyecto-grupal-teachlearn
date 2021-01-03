<?php

use App\Subject;
use App\Tutorial;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Users
Route::get('users', function(){
    return User::all();
});
Route::get('users/{id}', function($id){
    return User::find($id);
});
Route::post('users', function(Request $request){
    return User::create($request->all());
});
Route::put('users/{id}', function(Request $request, $id){
    $user = User::findOrFail($id);
    $user->update($request->all());

    return $user;
});
Route::delete('users/{id}', function($id){
    User::find($id)->delete();
    return 204;
});


//Tutorials
Route::get('tutorials', function(){
    return Tutorial::all();
});
Route::get('tutorials/{id_tutorial}', function($id_tutorial){
    return Tutorial::find($id_tutorial);
});
Route::post('tutorials', function(Request $request){
    return Tutorial::create($request->all());
});
Route::put('tutorials/{id_tutorial}', function(Request $request, $id_tutorial){
    $tutorial = Tutorial::findOrFail($id_tutorial);
    $tutorial->update($request->all());

    return $tutorial;
});
Route::delete('tutorials/{id_tutorial}', function($id_tutorial){
    Tutorial::find($id_tutorial)->delete();
    return 204;
});


//Subjects
Route::get('subjects', function(){
    return Subject::all();
});
Route::get('subjects/{id_subject}', function($id_subject){
    return Subject::find($id_subject);
});
Route::post('subjects', function(Request $request){
    return Subject::create($request->all());
});
Route::put('subjects/{id_subject}', function(Request $request, $id_subject){
    $subject = Subject::findOrFail($id_subject);
    $subject->update($request->all());

    return $subject;
});
Route::delete('subjects/{id_subject}', function($id_subject){
    Subject::find($id_subject)->delete();
    return 204;
});
