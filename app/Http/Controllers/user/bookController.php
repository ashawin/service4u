<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;
use App\Models\Orders;

class bookController extends Controller
{
    public  function index($slug){
    	$service=Product::where('slug','=',$slug)->first();
    $categories=Category::with('subcategories')->get();
      return  view('user.book',['categories'=>$categories,'service'=>$service]);
    }


    public function save(Request $request){

    	Orders::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'country'=>$request->country,'state'=>$request->state,'Distrcit'=>$request->district,'pin'=>$request->pin,'address'=>$request->address,'address1'=>$request->address1,'service_id'=>$request->service,'payment_type'=>$request->payment_method,'status'=>0));
    	session()->flash('msg','Sucessfully save .We will call you Soon');
    	return redirect('/');

    }
}

