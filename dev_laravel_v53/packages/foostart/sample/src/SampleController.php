<?php

namespace Foostart\Sample;

use App\Http\Controllers\Controller;
use Foostart\Sample\Models\Sample;

Class SampleController extends Controller
{
    public function index()
    {
    	return view('sample::index', array());
    }
    public function getData(){
    	$sp = new Sample();
    	$result = $sp->getAllData();

    	return view('sample::show')->with('data', $result);
    	//var_dump($result->toArray());
    }
}