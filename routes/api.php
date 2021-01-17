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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@authenticate');

Route::get('subjects', 'SubjectController@index');
Route::get('subjects/{subject}', 'SubjectController@show');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('users', 'UserController@index');
    Route::get('users/{user}', 'SubjectController@show');
    Route::post('users', 'UserController@store');
    Route::put('users/{user}', 'UserController@update');
    Route::delete('users/{user}', 'UserController@delete');

    Route::get('tutorials', 'TutorialController@index');
    Route::get('tutorials/{tutorial}', 'TutorialController@show');
    Route::post('tutorials', 'TutorialController@store');
    Route::put('tutorials/{tutorial}', 'TutorialController@update');
    Route::delete('tutorials/{tutorial}', 'TutorialController@delete');

    Route::post('subjects', 'SubjectController@store');
    Route::put('subjects/{subject}', 'SubjectController@update');
    Route::delete('subjects/{subject}', 'SubjectController@delete');
});



