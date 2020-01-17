<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
  
class FriendsController extends Controller{
    
    public function getResults(){
        /* bayad takmil bshe*/
        $user_friends = User::where('id','LIKE', "10")
          ->orWhere('id','LIKE',"9")
          ->get();

        return view('user.friends')->with('user_friends', $user_friends);
    }
}