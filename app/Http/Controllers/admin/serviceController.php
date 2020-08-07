<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;
use App\Models\ServiceRequest;


class serviceController extends Controller
{
    public function index()
    {

       $services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency')
       ->get();
       

    	return view('service.manage',['services'=>$services]);
    }
    public function add()
    {
    	$countries=Country::all();
    	$products=Product::all();
    	$category=Category::all();
    	return view('service.add',['countries'=>$countries,'products'=>$products,'categories'=>$category]);
    }

    public function save(Request $request){
    	$this->validate($request,['product_id'=>'required','price'=>'required','area_id'=>'required','type'=>'required','desc'=>'required','currency'=>'required','country_id'=>'required','state_id'=>'required','district_id'=>'required','category_id'=>'required','subcategory_id'=>'required']);
    	Service::create( array('product_id' =>$request->product_id ,'price'=>$request->price,'area_id'=>$request->area_id ,'type'=>$request->type,'desc'=>$request->desc,'is_price_show'=>$request->is_price_show,'currency'=>$request->currency,'country_id'=>$request->country_id,'state_id'=>$request->state_id,'district_id'=>$request->district_id,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id,'status'=>'0'));
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-service-add');

    }


    public function serviceRequest(){
         $services=ServiceRequest::
         join('services','services.id','=','service_requests.service_id')  
         ->join('countries','countries.id','=','services.country_id')  
         ->join('users','users.id','=','service_requests.provider_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('service_requests.status','=',0)
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','users.id as user_id')
       ->get();

       return view('service.request',['services'=>$services]);

    }

    public function confirmRequest(Request $request)
    {
             ServiceRequest::where(['provider_id'=>$request->user_id,'service_id'=>$request->service_id])->update(array('status' => 1));

             session()->flash('msg','Successfully Assigned');
             return redirect()->route('admin-service-request');

    }

}
