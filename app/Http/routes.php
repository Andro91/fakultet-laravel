<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Routes for Smer --- START
Route::get('/smer', 'SmerController@show');
Route::get('/smer/create', 'SmerController@create');
Route::get('/smer/edit/{id}', 'SmerController@edit');
Route::get('/smer/delete/{smer}', 'SmerController@delete');
Route::get('/smer/remove/{smer}', 'SmerController@remove');


Route::post('/smer/update/{smer}', 'SmerController@update');
Route::post('/smer/store', 'SmerController@store');
//Routes for Smer --- END

//Routes for Student --- START
Route::get('/student', 'StudentController@show');
Route::get('/student/create', 'StudentController@create');
Route::get('/student/edit/{id}', 'StudentController@edit');
Route::get('/student/delete/{student}', 'StudentController@delete');
Route::get('/student/remove/{student}', 'StudentController@remove');


Route::post('/student/update/{student}', 'StudentController@update');
Route::post('/student/store', 'StudentController@store');
//Routes for Student --- END