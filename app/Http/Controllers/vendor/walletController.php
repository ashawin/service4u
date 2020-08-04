<?php

namespace App\Http\Controllers\vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WalletRequest;

class walletController extends Controller
{
    public function request()
    {

     $walletrequests= WalletRequest::where(['holder_id'=>auth()->user()->id])->get();
     
    	return view('vendor.wallet.request',['walletrequets'=>$walletrequests]);


    }

    public function saveRequest(Request $request)
    {
       $this->validate($request,['method'=>'required','amount'=>'required']);

       WalletRequest::Create(array('balance_type'=>$request->method,'balance'=>$request->amount,'holder_id'=>auth()->user()->id,'status'=>1));
       session()->flash('msg','Request Send Successfully');

       return redirect()->back();
       


    }
}
