<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;

class categoryController extends Controller
{
    public function index(){
        
    	$categories=Category::with('subcategories')->get();

    	$subcategory= SubCategory::join('categories', 'categories.id', '=', 'sub_categories.category_id')
            ->select('categories.*','sub_categories.id as sub_id','sub_categories.subcategory')
            ->get();
           
    	return view('category.manage',['categories'=>$categories,'subcategory'=>$subcategory]);
    }


    public function addcategory(Request $request)
    {
    	$this->validate($request,['category'=>'required|unique:categories']);
    	Category::create(array('category' => $request->category ));
    	Session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-category');


    }

    public function deleteCategory($id){
         Category::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-category');
    }


    public function addsubcategory(Request $request)
    {
        $this->validate($request,['category_id'=>'required','subcategory'=>'required']);
    	SubCategory::create(array('category_id' => $request->category_id,'subcategory'=>$request->subcategory));
    	Session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-category');
    }

    public function deletesubCategory($id){
         SubCategory::find($id)->delete();
         session()->flash('msg','Sucessfully Deleted');
         return redirect()->route('admin-category');
    }
}
