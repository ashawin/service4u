<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Service;
use App\Models\Product;

class bookController extends Controller
{
    public  function index(){
    $categories=Category::with('subcategories')->get();
      return  view('user.book',['categories'=>$categories]);
    }
}
