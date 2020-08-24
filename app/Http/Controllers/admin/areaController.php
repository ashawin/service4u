<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;
use App\Models\District;
use App\Models\Area;
use Illuminate\Support\Str;

class areaController extends Controller
{
    public function index(){
    	$country=Country::all();
    	$states = State::join('countries', 'countries.id', '=', 'states.country_id')
            ->select('countries.id as country_id','countries.country as country','states.id as id','states.state as state')
            ->get();
        $district=District::join('countries', 'countries.id', '=', 'districts.country_id')
            ->join('states', 'states.id', '=', 'districts.state_id')
            ->select('states.*','countries.*','districts.id as dis_id','districts.district')
            ->get();

          $area=Area::join('countries', 'countries.id', '=', 'areas.country_id')
            ->join('states', 'states.id', '=', 'areas.state_id')
            ->join('districts', 'districts.id', '=', 'areas.district_id')
            ->select('states.*','countries.*','districts.*','areas.id as area_id','areas.area')
            ->get();

          

    	return view('area.manage',['country'=>$country,'states'=>$states,'districts'=>$district,'areas'=>$area]);
    }

//Country
    public function getall(Request $request){
    	
		       $country=Country::where('country_id','=',$request->id);
		       $state= State::all();
		       return responser()->json(['country'=>$country,'states'=>$state]);
    }


    public function addcountry(Request $request){

    	$this->validate($request,[
    		"country"=>'required|unique:countries']);
    	Country::create(array('slug'=>Str::slug($request->country),'category_id' => $request->country,'country' => $request->country));
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-area');
    }

//States

    public function addstate(Request $request)
    {
    	$this->validate($request,[
    		"country_id"=>'required',
    		"state" => 'required'
    	]);
    	session()->flash('msg','Successfully Added');
    	State::create(array('slug'=>Str::slug($request->state),'country_id' => $request->country_id ,'state'=>$request->state));
    	return redirect()->route('admin-area');
          State:create( array('country_id' => $request->country_id ,'state'=>$request->state ));

    }

    //District

    public function adddistrict(Request $request)
    {
          

          $this->validate($request,[
    		"country_id"=>'required',
    		"state_id" => 'required',
    		"district" => 'required'
    	]);
    	session()->flash('msg','Successfully Added');
    	District::create(array('slug'=>Str::slug($request->district),'country_id' => $request->country_id ,'state_id'=>$request->state_id ,'district'=>$request->district));
    	return redirect()->route('admin-area');
         
    }


    public function addarea(Request $request){

    	   $this->validate($request,[
    		"country_id"=>'required',
    		"state_id" => 'required',
    		"district_id" => 'required',
    		"area" => 'required'
    	]);
    	session()->flash('msg','Successfully Added');
    	Area::create(array('slug'=>Str::slug($request->area),'country_id' => $request->country_id ,'state_id'=>$request->state_id ,'district_id'=>$request->district_id,'area'=>$request->area));
    	return redirect()->route('admin-area');
    }


    public function deleteCountry($id){
         Country::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-area');

    }
        public function deleteState($id){
         State::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-area');

    }
        public function deleteDistrict($id){
         District::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-area');

    }
        public function deleteArea($id){
         Area::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-area');

    }






}
