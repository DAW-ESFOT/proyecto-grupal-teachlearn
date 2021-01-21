<?php

use App\Subject;
use App\Tutorial;
use App\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;

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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::get('subjects', 'SubjectController@index');
Route::get('subjects/{subject}', 'SubjectController@show');

Route::get('comments', 'CommentController@index');
Route::get('comments/{comment}', 'CommentController@show');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('user', 'UserController@getAuthenticatedUser');

    Route::get('tutorials', 'TutorialController@index');
    Route::get('tutorials/{tutorial}', 'TutorialController@show');
    Route::post('tutorials', 'TutorialController@store');
    Route::put('tutorials/{tutorial}', 'TutorialController@update');
    Route::delete('tutorials/{tutorial}', 'TutorialController@delete');

    Route::post('comments', 'CommentController@store');
    Route::put('comments/{comment}', 'CommentController@update');
    Route::delete('comments/{comment}', 'CommentController@delete');

    /*Route::get('tutorials/{tutorial}/subjects','SubjectController@index');
    Route::get('tutorials/{tutorial}/subjects/{subject}','SubjectController@show');
    Route::post('tutorials/{tutorial}/subjects','SubjectController@store');
    Route::put('tutorials/{tutorial}/subjects/{subject}','SubjectController@update');
    Route::delete('tutorials/{tutorial}/subjects/{subject}','SubjectController@delete');*/

});



