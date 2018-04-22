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

// --- Form --- //
Route::get('/', function () {
    return view('form');
});

// --- Admin Panel --- //
Route::get('/admin', function () {
    return view('admin');
});

// --- Default Laravel Page + Modifications --- //
Route::get('/home', function () {
    return view('home');
});


// --- Welcome (For Learning / Practice) --- //
Route::get('/welcome', function () {

	$tasks = 
	[
		'Drink energy drink',
		'Learn some Laravel',
		'Work on the code test'
	];

    return view('welcome', compact('tasks'));
});
