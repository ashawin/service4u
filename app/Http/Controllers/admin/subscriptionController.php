<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\User;

class subscriptionController extends Controller
{
    public function add(){
    	$countries=Country::all();
    	$products=Product::all();
    	$category=Category::all();
    	return view('subscription.add',['countries'=>$countries,'products'=>$products,'categories'=>$category]);
    }

    public function save(Request $request){


	
	
	$plan = app('rinvex.subscriptions.plan')->create([
	    'name' => $request->title,
	    'description' => $request->desc,
	    'price' => $request->price,
	    'signup_fee' => 0.00,
	    'invoice_period' => $request->period,
	    'invoice_interval' => 'month',
	    'trial_period' => 0,
	    'trial_interval' => 'day',
	    'sort_order' => 1,
	    'currency' => 'INR',
	]);

	$products=Product::whereIn('id',$request->product_id)->get();
	foreach($products as $product){
		 \DB::table('plan_features')->insert(['slug'=>$product->product,'plan_id'=>$plan->id,'name'=>json_encode($product->product),'value'=>1,'product_id'=>$product->id]);

	}

	session()->flash('msg','Successly created');

	return redirect()->route('admin-subsc-add');



  
    }
}
