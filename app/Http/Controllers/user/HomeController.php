<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;
use App\Models\Enquiry;
use App\Models\Banner;
use App\Models\Page;

class HomeController extends Controller
{
    public function index(){

    	$categories=Category::with('subcategories')->get();
      $products=Category::with('products')->get();
      $mainBanner=Banner::join('categories','categories.id','=','banners.category_id')->where('banners.slug','=','mainBanner')
      ->select('categories.category','banners.*')
      ->first();
     
  
    	$services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug','products.id as pro_id')
       ->take(4)->get();
        $allservices=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug','products.id as pro_id')
       ->get();

    	return view('user.index',['categories'=>$categories,'services'=>$services,'products'=>$products,'all'=>$allservices,'mainBanner'=>$mainBanner]);
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


           $services=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug')
       ->take(6)->get();



     

      
      

    	return view('user.product-details',['categories'=>$categories,'service'=>$service,'services'=>$services]);
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
       ->where('products.product','like','%'.$key.'%')
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

    public function searchCat($cat){


      $categories=Category::with('subcategories')->get();
      $result=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->join('products','products.id','=','services.product_id')
       ->join('categories','categories.id','services.category_id')
       ->join('sub_categories','sub_categories.id','services.subcategory_id')
       ->where('categories.category','like','%'.$cat.'%')
       ->orWhere('sub_categories.subcategory','like','%'.$cat.'%')
       ->select('countries.country','states.state','districts.district','products.product','areas.area','categories.category','sub_categories.subcategory','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency','products.images','products.slug as pro_slug')
       ->get();
        return view('user.search',['categories'=>$categories,'services'=>$result]);

    }

    public function contact(){
      $categories=Category::all();
      return view('user.contact',['categories'=>$categories]);
    }

    public function contactSave(Request $request){
      $this->validate($request,['name'=>'required','email'=>'required|email','mobile'=>'required|min:11|numeric','desc'=>'required']);

      Enquiry::create( array('slug'=>'usercontact','name' =>$request->name ,'email'=>$request->email,'mobile'=>$request->mobile,'desc1'=>$request->desc));
      session()->flash('msg','Successfully Send');
         return redirect()->route('user-contact');
    }

    public function privacypolicy(){
      $categories=Category::all();
    $text=  Page::where('slug','=','privacypolicy')->first();
    return view('user.policy.privacy',['text'=>$text,'categories'=>$categories]);

    }

    public function terms(){
       $categories=Category::all();
      $text=Page::where('slug','=','terms&condition')->first();
      return view('user.policy.terms',['text'=>$text,'categories'=>$categories]);
    }

    public function profile(){
      $categories=Category::all();
      return view('user.account',['categories'=>$categories]);
    }

    public function login()
    {
      $categories=Category::all();
      return view('user.login',['categories'=>$categories]);
    }


  
}
