<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;
use App\Models\Enquiry;

class HomeController extends Controller
{
    public function index(){
    	$categories=Category::with('subcategories')->get();
    	$services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug','products.id as pro_id')
       ->take(4)->get();

    	return view('user.index',['categories'=>$categories,'services'=>$services]);
    }

    public function productDetails($product){
      $categories=Category::with('subcategories')->get();
      $service=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('products.slug','=',$product)
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug')
       ->first();
      

    	return view('user.product-details',['categories'=>$categories,'service'=>$service]);
    }

    public function search(Request $request)
    {
      $key=$request->key;


      $categories=Category::with('subcategories')->get();
    $result=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('products.slug','=',$key)
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug')
       ->get();
    
      return view('user.search',['categories'=>$categories,'services'=>$result]);
    }

    public function partnerEnquiry(Request $request){
      $this->validate($request,['email'=>'required|unique:users,email']);

      Enquiry::create(array('slug'=>\Str::slug('partnerEnquiry'),'email'=>$request->email));
      session()->flash('msg','Request Send Successfully');
      return redirect('/');
    }
}
