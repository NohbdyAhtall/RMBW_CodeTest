<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {   	
    	return view ('posts.index');
    }
    public function show()
    {
    	return view ('posts.show');
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

    	$this->validate(request(), [
    		'custFirstName' => 'required',
    		'custLastName' 	=> 'required',
    		'custAddress1' 	=> 'required',
    		'custAddress2' 	=> 'required',
    		'custCity' 		=> 'required',
    		'custState' 	=> 'required',
    		'custZip' 		=> 'required|regex:/\b\d{5}\b/',
    		'custPhone' 	=> 'required|numeric|phone',
    		'custEmail' 	=> 'required',
    		'compName' 		=> 'required',
    		'compAddress' 	=> 'required',
    		'compCity' 		=> 'required',
    		'compState' 	=> 'required',
    		'compZip' 		=> 'required|regex:/\b\d{5}\b/',
    		'compPhone' 	=> 'required|numeric|phone',
    		'compInvoicePDF' => 'required'
    	]);

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
