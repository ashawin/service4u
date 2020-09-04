<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Country;
use App\Models\District;
use App\Models\State;
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
      $countries=Country::all();
      return  view('user.book',['categories'=>$categories,'service'=>$service,'type'=>0,'countries'=>$countries
    ]);
    }


    public function save(Request $request){


      $this->validate($request,['name'=>'required','mobile'=>'required','country'=>'required','email'=>'required','state'=>'required','district'=>'required','pin'=>'required','payment_method'=>'required','address'=>'required','service'=>'required',
    'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
'password_confirmation' => 'min:6','type'=>'required']);
      if (\Auth::check())
      {


        $user=User::find(auth()->user()->id);
      }else{

        if(User::where('mobile', '=', $request->mobile)->exists()){
          return redirect('user/login');
        }else{

      
        $user=User::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'address'=>$request->address,'country'=>$request->country,'state'=>$request->state,'distric'=>$request->district,'role'=>3,'password'=>\Hash::make($request->password)));
       \Auth::login($user);
       }
     }

    

    
    
if($request->type==0){
      $service=Service::join('countries','countries.id','=','services.country_id')   
       ->join('districts','districts.id','services.district_id')
       ->join('states','states.id','=','services.state_id')
       ->join('areas','areas.id','=','services.area_id')
       ->where('services.id','=',$request->service)
       ->select('countries.country','states.state','areas.area','districts.district','services.id as service_id','services.price','services.type','services.desc','services.is_price_show','services.currency')
       ->first();
     }else{
       $plan= app('rinvex.subscriptions.plan')->find($request->service);
       $service=\DB::table('areas')
             ->join('countries','countries.id','=','areas.country_id')   
       ->join('districts','districts.id','areas.district_id')
       ->join('states','states.id','=','areas.state_id')
       ->where('areas.id','=',$plan->area_id)
       ->first();

     }

     $country=Country::find($request->country);
     $state=State::find($request->state);
     $district=District::find($request->district);

       $country=strcasecmp($service->country,$country->country);
       $state=strcasecmp($service->state,$state->state);

       $district=strcasecmp($service->district,$district->district);

       if($country==0 && $state==0 && $district==0)
       {

        Orders::create(array('name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'country'=>$country,'state'=>$state,'Distrcit'=>$district,'pin'=>$request->pin,'address'=>$request->address,'address1'=>$request->address1,'service_id'=>$request->service,'payment_type'=>$request->payment_method,'status'=>0,'user_id'=>$user->id,'type'=>$request->type));
        session()->flash('msg','Request sent sucessfully.We will contact you soon');
       }
       else
       {
        Enquiry::create(array('slug'=>\Str::slug('userEnquiry'),'name'=>$request->name,'email'=>$request->email,'mobile'=>$request->mobile,'service'=>$request->service,'country'=>$request->country,'state'=>$request->state,'area'=>$request->address));
        session()->flash('msgerror','Sorry !.Service is Not available in the this area.We will reach you soon ');
       } 
	
    	return redirect()->back()->withInput();;

    }


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

   
}

