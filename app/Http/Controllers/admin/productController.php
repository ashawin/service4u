<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
class productController extends Controller
{
    public function index(){
    	$categories=Category::with('subcategories')->get();
    	$subcategory=SubCategory::all();
    	$products=Product::join('categories', 'categories.id', '=', 'products.category_id')
    	->join('sub_categories', 'sub_categories.id', '=', 'products.subcategory_id')
            ->select('categories.*','sub_categories.*','products.id as pro_id','products.desc','products.images','products.product')
            ->paginate(5);

    	return view('product.manage',['category'=>$categories,'subcategory'=>$subcategory,'products'=>$products]);

    }

    public function save(Request $request){
    	$this->validate($request,['product'=>'required','images.*'=>'required','category_id'=>'required','subcategory_id'=>'required','desc'=>'required']);  	
		    $images=array();

		   
		    if($files=$request->file('images')){
		        foreach($files as $file){
		            $name=$file->getClientOriginalName();
		            $file->move(public_path('/products/images/'),$name);
		            $images[]=$name;
		        }
		    }

		    Product::create(array('product' =>$request->product,'slug'=>Str::slug($request->product),'images'=>implode('|', $images) ,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id,'desc'=>$request->desc));
		    session()->flash('msg','Succesfully Added');

		    return redirect()->route('admin-product');


    }

     public function edit($id){

     $product=Product::join('categories', 'categories.id', '=', 'products.category_id')
        ->join('sub_categories', 'sub_categories.id', '=', 'products.subcategory_id')
            ->select('categories.*','sub_categories.*','products.id as pro_id','products.desc','products.images','products.product','products.subcategory_id')
            ->where('products.id','=',$id)
            ->first();


    $category=Category::all();
              return view('product.edit',['product'=>$product,'categories'=>$category]);

    }


public function editsave(Request $request){
    $this->validate($request,['product'=>'required','oldimages'=>'required','category_id'=>'required','subcategory_id'=>'required','desc'=>'required']);     
            $images1=array();

          if($files=$request->file('images')){
           
                        foreach($files as $file){
                            $name=$file->getClientOriginalName();
                            $file->move(public_path('/products/images/'),$name);
                            $images1[]=$name;
                        }
                       $images= implode('|', $images1);
                    }
                    else
                    {
                        $images =$request->oldimages;
                    }


             Product::where('id','=',$request->id)->update(array('product' =>$request->product,'slug'=>Str::slug($request->product),'images'=>$images ,'category_id'=>$request->category_id,'subcategory_id'=>$request->subcategory_id,'desc'=>$request->desc));
            session()->flash('msg','Succesfully Added');

            return redirect()->route('admin-product');
}
    public function delete($id)
    {
        Product::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-product');

    }



}
