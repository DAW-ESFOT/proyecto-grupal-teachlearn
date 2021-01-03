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
Route::get('tutorials/{id}', function($id){
    return Tutorial::find($id);
});
Route::post('tutorials', function(Request $request){
    return Tutorial::create($request->all());
});
Route::put('tutorials/{id}', function(Request $request, $id){
    $tutorial = Tutorial::findOrFail($id);
    $tutorial->update($request->all());

    return $tutorial;
});
Route::delete('tutorials/{id}', function($id){
    Tutorial::find($id)->delete();
    return 204;
});


//Subjects
Route::get('subjects', function(){
    return Subject::all();
});
Route::get('subjects/{id}', function($id){
    return Subject::find($id);
});
Route::post('subjects', function(Request $request){
    return Subject::create($request->all());
});
Route::put('subjects/{id}', function(Request $request, $id){
    $subject = Subject::findOrFail($id);
    $subject->update($request->all());

    return $subject;
});
Route::delete('subjects/{id}', function($id){
    Subject::find($id)->delete();
    return 204;
});
