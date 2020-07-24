<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Product;
use App\Models\Category;
use App\Models\Service;


class serviceController extends Controller
{
    public function index()
    {


    	return view('services');
    }
    public function add()
    {
    	$countries=Country::all();
    	$products=Product::all();
    	$category=Category::all();
    	return view('service.add',['countries'=>$countries,'products'=>$products,'categories'=>$category]);
    }

    public function save(Request $request){
    	$this->validate($request,['product_id'=>'required','price'=>'required','area_id'=>'required','type'=>'required','desc'=>'required','is_price_show'=>'required','currency'=>'required','country_id'=>'required','state_id'=>'required','district_id'=>'required','category_id'=>'required','subcategory_id'=>'required']);
    	Service::create( array('product_id' =>$request->product_id ,'price'=>$request->price,'area_id'=>$request->area_id ,'type'=>$request->type,'desc'=>$request->desc,'is_price_show'=>$request->is_price_show,'currency'=>$request->currency,'country_id'=>$request->country_id,'state_id'=>$request->state_id,'district_id'=>$request->district_id,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id));
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-service-add');



    }
}
