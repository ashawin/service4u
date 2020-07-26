<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Bavix\Wallet\Models\Transfer;
use Bavix\Wallet\Test\Models\UserMulti;


class walletController extends Controller
{
    public function index(){

    $transaction= \DB::table('transactions')
    ->leftJoin('wallets','wallets.id','=','transactions.wallet_id')
    ->rightJoin('users','users.id','=','wallets.holder_id')
    
    ->select('users.*','transactions.*')
    ->get();
   

      return view('wallet.index',['transactions'=>$transaction]);
    }


    public function addBalnce(Request $request ,$id){
    	
    	$user= User::find($id);
    	$user2=User::find(2);
    	  $transfer = $user->transfer($user2,100);
    	
    	session()->flash('msg','Successfully Added');
    	return redirect()->route('admin-transaction');
    	

    }
}
