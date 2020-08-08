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
    	$service=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('products.slug',$slug)    
       ->select('products.product','countries.country','states.state','areas.area','districts.district','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency')
       ->first();
      
    $categories=Category::with('subcategories')->get();
      return  view('user.book',['categories'=>$categories,'service'=>$service]);
    }


    public function save(Request $request){

    	Orders::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'country'=>$request->country,'state'=>$request->state,'Distrcit'=>$request->district,'pin'=>$request->pin,'address'=>$request->address,'address1'=>$request->address1,'service_id'=>$request->service,'payment_type'=>$request->payment_method,'status'=>0));
    	session()->flash('msg','Sucessfully save .We will call you Soon');
    	return redirect('/');

    }
}

