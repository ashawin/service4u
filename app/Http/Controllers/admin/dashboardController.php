<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;

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
}
