<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class customerController extends Controller
{
    public function index(){
        $users=User::where('role','=',3)->get();
    	return view('customers',['users'=>$users]);
    }
}
