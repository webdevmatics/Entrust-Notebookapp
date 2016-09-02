<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/



Auth::routes();


Route::group(['middleware'=>'auth'],function(){
	Route::get('/', function () {
    return view('notebookapp');
	});
	Route::resource('notebooks','NotebooksController');
	Route::get('notebooks/{id}/createNote',['as'=>'createNote','uses'=>'NotesController@createNote']);
	Route::resource('notes','NotesController');
});
Route::get('/home', 'HomeController@index');



