<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulatorController extends Controller
{
    public function formulator()
    {
    	return view('form');
    }

    public function adminPanel()
    {
    	return view('admin');
    }
}
