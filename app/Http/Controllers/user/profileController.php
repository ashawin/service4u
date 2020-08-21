<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Orders;

class profileController extends Controller
{
     public function profile(){

      $categories=Category::all();
      $services=Orders::
      join('services','services.id','=','orders.service_id')
      ->join('products','products.id','=','services.product_id')
      ->select('products.product','products.images','services.status','services.price')
      ->where(['orders.user_id'=>auth()->user()->id,'orders.type'=>0])->get();
   


      return view('user.account',['categories'=>$categories,'services'=>$services]);
    }
}
