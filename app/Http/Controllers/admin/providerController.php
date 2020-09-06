<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class providerController extends Controller
{
    public function index(){
    	$users=User::where('role','=',2)->paginate(5);
    	return view('providers',['users'=>$users]);
    }
}
