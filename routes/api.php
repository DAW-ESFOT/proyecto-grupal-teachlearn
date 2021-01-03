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
Route::get('users', 'UserController@index');
Route::get('users/{user}', 'UserController@show');
Route::post('users', 'UserController@store');
Route::put('users/{user}', 'UserController@update');
Route::delete('users/{user}', 'UserController@delete');



//Tutorials
Route::get('tutorials', 'TutorialController@index');
Route::get('tutorials/{tutorial}', 'TutorialController@show');
Route::post('tutorials', 'TutorialController@store');
Route::put('tutorials/{tutorial}', 'TutorialController@update');
Route::delete('tutorials/{tutorial}', 'TutorialController@delete');


//Subjects
Route::get('subjects', 'SubjectController@index');
Route::get('subjects/{subject}', 'SubjectController@show');
Route::post('subjects', 'SubjectController@store');
Route::put('subjects/{subject}', 'SubjectController@update');
Route::delete('subjects/{subject}', 'SubjectController@delete');
