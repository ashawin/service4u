<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class subscriptionController extends Controller
{
    public function index(){
    	$categories=Category::with('subcategories')->get();
    	$plans= app('rinvex.subscriptions.plan')->all();
    	return view('user.subscription',['categories'=>$categories,'plans'=>$plans]);
    }

      public function subscriptionDetails($id,$slug){
      	$categories=Category::with('subcategories')->get();
      	$plan = app('rinvex.subscriptions.plan')->find($id);    
        return view('user.subscription_details',[
      	'plan'=>$plan,'features'=>$plan->features,'categories'=>$categories]);
    }


    public function book($slug){
         $slug=\DB::table('plans')->where('slug','=',$slug)->first();
         $service = app('rinvex.subscriptions.plan')->find($slug->id);

       $categories=Category::with('subcategories')->get();
      return  view('user.book',['categories'=>$categories,'service'=>$service,'type'=>1]);
         	dd($plan);

    }


}
