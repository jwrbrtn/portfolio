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
Route::post('/blog/create', 'PostsController@store')->middleware('auth');
Route::get('/blog/{id}/edit', 'PostsController@edit')->middleware('auth');
Route::post('/blog/{id}/edit', 'PostsController@update')->middleware('auth');
Route::post('/blog/{id}/destroy', 'PostsController@destroy')->middleware('auth');

/* Projects Routes */
Route::get('/projects', 'ProjectsController@index');
Route::get('/project/{id}', 'ProjectsController@show');
Route::get('/project/new', 'ProjectsController@create')->middleware('auth');
Route::post('/projects/create', 'ProjectsController@store')->middleware('auth');
Route::get('/projects/{id}/edit', 'ProjectsController@edit')->middleware('auth');
Route::post('/projects/{id}/edit', 'ProjectsController@update')->middleware('auth');
Route::post('/projects/{id}/destroy', 'ProjectsController@destroy')->middleware('auth');
