<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
    	return view('vendor.dashboard');
    }
     

    public function profile(){
    	return view('vendor.profile');
    }
   
}
