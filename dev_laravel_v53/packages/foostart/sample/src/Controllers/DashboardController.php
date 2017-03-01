<?php

namespace Foostart\Sample\Controllers;

use App\Http\Controllers\Controller;
use View;

class DashboardController extends Controller
{
    //
    public function base(){
    	return View::make('sample::admin.dashboard.default');
    }
}