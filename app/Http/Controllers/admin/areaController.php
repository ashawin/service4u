<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;

class areaController extends Controller
{
    public function index(){
    	return view('area.manage');
    }


    public function addcategory(Request $request){

    	$this->validate($request,[
    		"country"=>'required']);
    	Country::create(array('country' => $request->country));
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-area');
    }
}
