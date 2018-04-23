<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class FormulatorController extends Controller
{
    public function formulator()
    {
    	return view('form');
    }

    public function create()
    {
    	return view('posts.create');
    }

    public function store()
    {
	    // Create a new post using the request data
    	//$post = new Post;


    	//$post->custFirstName = request('custFirstName');
    	// Save it to the database
    	//$post->save();

    	Post::create([
    		'custFirstName' => request('custFirstName'),
    		'custLastName' 	=> request('custLastName'),
    		'custAddress1' 	=> request('custAddress1'),
    		'custAddress2' 	=> request('custAddress2'),
    		'custCity' 		=> request('custCity'),
    		'custState' 	=> request('custState'),
    		'custZip' 		=> request('custZip'),
    		'custPhone' 	=> request('custPhone'),
    		'custEmail' 	=> request('custEmail'),
    		'compName' 		=> request('compName'),
    		'compAddress' 	=> request('compAddress'),
    		'compCity' 		=> request('compCity'),
    		'compState' 	=> request('compState'),
    		'compZip' 		=> request('compZip'),
    		'compPhone' 	=> request('compPhone'),
    		'compInvoicePDF' => request('compInvoicePDF')

    	]);


    	// Redirect to form page
    	return redirect('/');
    }

    public function adminPanel()
    {
    	return view('admin');
    }
}
