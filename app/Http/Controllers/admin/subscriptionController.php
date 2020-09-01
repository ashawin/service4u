<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceRequest;
use App\Models\Orders;
use App\User;

class subscriptionController extends Controller
{


	public function index(){

	     $plans= app('rinvex.subscriptions.plan')->all(); 
         $planrequests=Orders::join('plans','plans.id','=','orders.service_id') 
         ->join('users','users.id','=','orders.user_id')
            ->join('areas','areas.id','=','plans.area_id')
            ->join('countries','countries.id','=','areas.country_id')
             ->join('states','states.id','=','areas.state_id')
              ->join('districts','districts.id','=','areas.district_id')
              ->where('orders.type','=',1)
              ->where('orders.status','=',0)
              ->select('plans.*','users.mobile','orders.id as order_id','users.id as user_id','countries.country','states.state','areas.area')
              ->get();


		return view('subscription.manage',['plans'=>$plans,'planrequests'=>$planrequests]);
	}
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
	    'area_id' => $request->area_id,
	    'signup_fee' => 0.00,
	    'invoice_period' => $request->period,
	    'invoice_interval' => 'day',
	    'trial_period' => $request->count,
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

    public function confirm(Request $request,$id){
    	$user = User::find($request->user_id);
    	$plan = app('rinvex.subscriptions.plan')->find($request->plan_id);
    	$user->newSubscription('main', $plan);
    	Orders::find($id)->update(['status'=>1]);
    	session()->flash('msg','Successfuly Assigned');
    	return redirect()->back();

    }
}
