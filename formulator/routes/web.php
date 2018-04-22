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

use App\Task;

// --- Form --- //
Route::get('/', 'FormulatorController@formulator');

// --- Admin Panel --- //
Route::get('/admin', 'FormulatorController@adminPanel');

// --- Default Laravel Page + Modifications --- //
Route::get('/home', function () {
    return view('home');
});

// --- Welcome (For Learning / Practice) --- //
Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/{task}',	'TasksController@show');