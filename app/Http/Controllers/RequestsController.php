<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
  
class RequestsController extends Controller{
    
    public function getResults(){
        /* bayad takmil bshe*/
        $user_requests = User::where('id','LIKE', "8")
          ->orWhere('id','LIKE',"9")
          ->get();

        return view('user.requests')->with('user_requests', $user_requests);
    }
}