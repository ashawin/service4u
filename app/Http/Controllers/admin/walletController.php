<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Bavix\Wallet\Models\Transfer;
use Bavix\Wallet\Test\Models\UserMulti;
use App\Models\WalletRequest;


class walletController extends Controller
{
    public function index(){

    $transaction= \DB::table('transactions')
    ->join('wallets','wallets.id','=','transactions.wallet_id')
    ->join('users','users.id','=','wallets.holder_id')
    
    ->select('transactions.*','users.*')
    ->get();

   

      return view('wallet.index',['transactions'=>$transaction]);
    }

    public function addbalance(Request $request){
        $this->validate($request,['amount'=>'required']);

        
        auth()->user()->deposit($request->amount);
        return redirect()->route('admin-transaction');



    }


    public function transferBalance(Request $request ,$id,$balance){
        

    	$user= User::find($request->user_id);
      
    	
    	  $transfer = auth()->user()->transfer($user,$balance);
        $status=  WalletRequest::find($id)->update(array('status' => 2));

    	
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-wallet-request');
    	

    }


    public function walletRequest(){


        $requests=walletRequest::join('users','users.id','wallet_requests.holder_id')
        ->select('users.name','users.email','users.mobile','wallet_requests.id as wal_id','wallet_requests.balance','wallet_requests.status','users.id as user_id')->orderBy('wallet_requests.id', 'desc')->get();
        
        return  view('wallet.request',['requests'=>$requests]);

    }
}
