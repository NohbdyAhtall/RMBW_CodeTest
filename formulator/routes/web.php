<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// --- Welcome (For Learning / Practice) --- //
Route::get('/laracast', 'PostsController@index');
Route::get('/laracast/posts/{posts}', 'PostsController@show');

// controller => PostsController

// Eloquent model => Post

// migration => create_posts_table
//Route::get('/tasks/{task}',	'TasksController@show');






// --- Form --- // --------- --------- --------- // Form --- //
Route::get(	'/',
			'PostsController@index');

Route::get(	'/posts/create',
			'PostsController@create');

Route::get( '/laracast/posts/{posts}',
			'PostsController@show');

Route::post( '/posts',
			 'PostsController@store');

// --- Admin Panel --- // --------- --------- -- // Admin Panel --- //
Route::get( '/admin',
			'PostsController@adminPanel');