<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceRequest;

class serviceController extends Controller
{
    public function index(){
      $servceid=array();
      $servicereuest=ServiceRequest::where(['provider_id'=>auth()->user()->id])->get();
      foreach($servicereuest as $service)
      {
         array_push($servceid,$service->service_id);
      }    

      $services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->whereNotIn('services.id',$servceid)
       
       ->select('products.product','countries.country','states.state','areas.area','districts.district','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency')
       ->get();
    	
    	$pendingservices=ServiceRequest::
       join('services','services.id','=','service_requests.service_id') 
       ->join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('service_requests.status','=',0)      
       ->select('products.product','countries.country','states.state','areas.area','districts.district','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','service_requests.status')
       ->get();

       $myservice=ServiceRequest::
       join('services','services.id','=','service_requests.service_id') 
       ->join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('service_requests.status','=',1)      
       ->select('products.product','countries.country','states.state','areas.area','districts.district','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','service_requests.status')
       ->get();
       
    	return view('vendor.service.service',['services'=>$services,'pendingservices'=>$pendingservices,'myservices'=>$myservice]);
    }

    public function requestService(Request $request)
    {
      $this->validate($request,['service_id'=>'required']);
      if(!ServiceRequest::where(['service_id'=>$request->service_id,'provider_id'=>auth()->user()->id])->exists()){

      ServiceRequest::create(array('service_id'=>$request->service_id,'provider_id'=>auth()->user()->id,'slug'=>$request->service_id,'status'=>0,'desc'=>'service requets'));
      session()->flash('msg','Request Send Successfully');
    }


      return redirect()->route('vendor-service');
    
    }
}



