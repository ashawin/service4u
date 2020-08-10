<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;
use App\Models\Orders;
use App\Models\Enquiry;
use App\User;

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

      $this->validate($request,['name'=>'required','mobile'=>'required','country'=>'required','email'=>'required','state'=>'required','district'=>'required','pin'=>'required','payment_method'=>'required','address'=>'required','service'=>'required']);
      $service=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->where('services.id','=',$request->service)
       ->select('countries.country','states.state','areas.area','districts.district','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency')
       ->first();

       $country=strcasecmp($service->country,$request->country);
       $state=strcasecmp($service->state,$request->state);

       $district=strcasecmp($service->district,$request->district);

       if($country==0 && $state==0 && $district==0)
       {

        Orders::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'country'=>$request->country,'state'=>$request->state,'Distrcit'=>$request->district,'pin'=>$request->pin,'address'=>$request->address,'address1'=>$request->address1,'service_id'=>$request->service,'payment_type'=>$request->payment_method,'status'=>0));
        session()->flash('msg','Request sent sucessfully.We will contact you soon');
       }
       else
       {
        Enquiry::create(array('slug'=>\Str::slug('userEnquiry'),'name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'service'=>$request->service,'country'=>$request->country,'state'=>$request->state,'area'=>$request->address));
        session()->flash('msgerror','Sorry !.Service is Not available in the this area.We will reach you soon ');
       } 

       if($request->account=='1'){

        User::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'pin'=>$request->pin,'address'=>$request->address,'role'=>3));
       }
     	
    	return redirect()->back();

    }
}

