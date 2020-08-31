<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;

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
          $services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('services.type','=',0)      
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug')
       ->take(6)->get();    
        return view('user.subscription_details',[
      	'plan'=>$plan,'features'=>$plan->features,'categories'=>$categories,'services'=>$services]);
    }


    public function book($slug){
         $slug=\DB::table('plans')->where('slug','=',$slug)->first();
         $service = app('rinvex.subscriptions.plan')->find($slug->id);

       $categories=Category::with('subcategories')->get();
      return  view('user.book',['categories'=>$categories,'service'=>$service,'type'=>1]);
         	dd($plan);

    }


}
