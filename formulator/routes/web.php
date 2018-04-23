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






// --- Form --- //
Route::get('/', 'FormulatorController@formulator');

// --- Admin Panel --- //
Route::get('/admin', 'FormulatorController@adminPanel');

// --- Default Laravel Page + Modifications --- //
Route::get('/home', function () {
    return view('home');
});
