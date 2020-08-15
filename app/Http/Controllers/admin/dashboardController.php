<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Category;
use App\Models\Banner;

class dashboardController extends Controller
{
    public function index()
    {
    	return view('index');
    }

    public function inbox(){
      $inboxs=Enquiry::all();
      return view('inbox.inbox',['inboxs'=>$inboxs]);
    }

  public function getBanner(){

  	$categories=Category::all();
  	 $banners=  Banner::join('categories','categories.id','=','banners.category_id')
  	          ->select('categories.category','banners.*')
  	          ->get();
  	return view('banner',['categories'=>$categories,'banners'=>$banners]);

  }

    public function saveBanner(Request $request){

    	$this->validate($request,['type'=>'required','image'=>'required','category_id'=>'required','price'=>'required']);
    	    if($files=$request->file('image')){
		       
	            $name=$files->getClientOriginalName();
	            $files->move(public_path('/products/banners/'),$name);
	            Banner::create(array('slug'=>$request->type,'image'=>$name,'category_id'=>$request->category_id,'price'=>$request->price));

	            session()->flash('msg','Banner Sucessfully Added');
		            
		    return redirect()->route('admin-banner');
		    }
    

    }


    public function deleteBanner($id){
      Banner::find($id)->delete();
      session()->flash('msg','Banner Sucessfully Deleted');
      return redirect()->route('admin-banner');
    }


    public function policy(){
      return view('policy.add');
    }
}
