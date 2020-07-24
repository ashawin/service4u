<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\State;
use App\Models\District;
use App\Models\SubCategory;
use App\Models\Product;
use App\Models\Area;


class ajaxController extends Controller
{
    public function getStates(Request $request){

    	$states=State::where('country_id','=',$request->id)->get();
    	return response()->json($states);

    }

    public function getDistricts(Request $request)
    {
    	$matchThese = ['country_id' =>$request->country, 'state_id' => $request->state];
    	$districts=District::where($matchThese)->get();
    	return response()->json($districts);

    }

    public function getSubCategory(Request $request){

    	$SubCategory=SubCategory::where('category_id',$request->id)->get();
    	return response()->json($SubCategory);
    }

    public function getProduct(Request $request){
        $matchThese = ['category_id' =>$request->category, 'subcategory_id' => $request->subcategory];
    	$product=Product::where($matchThese)->get();
    	return response()->json($product);
    }


    public function getArea(Request $request)
    {
    $matchThese=['country_id' =>$request->country, 'state_id' => $request->state,'district_id'=>$request->district];
    	$district=Area::where($matchThese)->get();
    	return response()->json($district);

    }
}
