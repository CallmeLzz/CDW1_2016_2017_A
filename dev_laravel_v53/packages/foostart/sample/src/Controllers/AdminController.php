<?php

namespace Foostart\Sample\Controllers;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //
    public function index(){
    	$errors = null;
    	return view('sample::admin.auth.login')->with('errors', $errors);
    }
}
