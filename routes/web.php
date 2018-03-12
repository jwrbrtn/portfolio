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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


/* Posts Routes */
Route::get('/blog', 'PostsController@index');
Route::get('/blog/{id}', 'PostsController@show');
Route::get('/post/new', 'PostsController@create')->middleware('auth');
Route::post('/post/new', 'PostsController@store')->middleware('auth');
Route::get('/blog/{id}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/blog/{id}/edit', 'PostsController@update')->middleware('auth');
Route::delete('/blog/{id}/delete', 'PostsController@destroy')->middleware('auth');

/* Projects Routes */
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{id}', 'ProjectsController@show');
Route::get('/project/new', 'ProjectsController@create')->middleware('auth');
Route::post('/project/new', 'ProjectsController@store')->middleware('auth');
Route::get('/projects/{id}/edit', 'ProjectsController@edit')->middleware('auth');
Route::patch('/projects/{id}/edit', 'ProjectsController@update')->middleware('auth');
Route::delete('/projects/{id}/delete', 'ProjectsController@destroy')->middleware('auth');


/* Setup Routes */
Route::get('/setup', 'SetupController@index');
