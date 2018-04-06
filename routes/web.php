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

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->middleware('doesUserExist');

Route::get('/home', 'HomeController@index')->middleware('setup');


/* Posts Routes */
Route::get('/blog', 'PostsController@index');
Route::get('/blog/{slug}', 'PostsController@show');
Route::get('/post/new', 'PostsController@create')->middleware('auth');
Route::post('/post/new', 'PostsController@store')->middleware('auth');
Route::get('/blog/{slug}/edit', 'PostsController@edit')->middleware('auth');
Route::patch('/blog/{slug}/edit', 'PostsController@update')->middleware('auth');
Route::delete('/blog/{slug}/delete', 'PostsController@destroy')->middleware('auth');
Route::get('/allposts', 'PostsController@showAll')->middleware('auth');


/* Projects Routes */
//front end
Route::get('/projects', 'ProjectsController@index');
Route::get('/projects/{slug}', 'ProjectsController@show');
// Back end
Route::get('/project/new', 'ProjectsController@create')->middleware('auth');
Route::post('/project/new', 'ProjectsController@store')->middleware('auth');
Route::get('/projects/{slug}/edit', 'ProjectsController@edit')->middleware('auth');
Route::patch('/projects/{slug}/edit', 'ProjectsController@update')->middleware('auth');
Route::delete('/projects/{slug}/delete', 'ProjectsController@destroy')->middleware('auth');
Route::get('/allprojects', 'ProjectsController@showAll');




/* Setup Routes */
Route::get('/setup', 'SetupController@create');
Route::post('/setup', 'SetupController@store');
Route::get('image/create', 'ImagesController@create');
Route::get('/settings/{id}/edit', 'SetupController@edit');
Route::patch('/settings/{id}/edit', 'SetupController@update');



/* Messages Routes */
Route::get('/messages', 'MessagesController@index');
Route::get('/messages/{id}/show', 'MessagesController@show');
Route::get('/contact', 'MessagesController@create');
Route::post('/contact', 'MessagesController@store');
Route::post('/messages/{id}/delete', 'MessagesController@destroy');

// Logout
Route::get('/logout', function(){
  Auth::logout();
  return redirect('/');
});
