<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Follower;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as cn;
use Illuminate\Support\Facades\Auth;
use DB;
  
class RequestsController extends Controller{
    
    public function getResults(){

        $user_requests = Follower::where('following_id','=', Auth::user()->id)
          ->get();
      
        return view('user.requests')->with('user_requests', $user_requests);
    }
}