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



Route::get('/', 'HomePageController@index')->middleware('registered');


Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('setup');


/* Posts Routes */
Route::get('/blog', 'PostsController@index');
Route::get('/blog/{id}', 'PostsController@show');
Route::get('/post/new', 'PostsController@create')->middleware('auth');
Route::post('/post/new', 'PostsController@store')->middleware('auth');
Route::get('/blog/{id}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/blog/{id}/edit', 'PostsController@update')->middleware('auth');
Route::delete('/blog/{id}/delete', 'PostsController@destroy')->middleware('auth');
Route::get('/allposts', 'PostsController@showAll')->middleware('auth');


/* Projects Routes */
//front end
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{id}', 'ProjectsController@show');
// Back end
Route::get('/project/new', 'ProjectsController@create')->middleware('auth');
Route::post('/project/new', 'ProjectsController@store')->middleware('auth');
Route::get('/projects/{id}/edit', 'ProjectsController@edit')->middleware('auth');
Route::patch('/projects/{id}/edit', 'ProjectsController@update')->middleware('auth');
Route::delete('/projects/{id}/delete', 'ProjectsController@destroy')->middleware('auth');
Route::get('/project/all', 'ProjectsController@showAll');




/* Setup Routes */
Route::get('/setup', 'SetupController@create');
Route::post('/setup', 'SetupController@store');
Route::get('image/create', 'ImagesController@create');



/* Messages Routes */
Route::get('/contact', 'MessagesController@create');
Route::post('/contact', 'MessagesController@store');
