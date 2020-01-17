<?php
namespace App\Http\Controllers;

use App\Follower;
use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as cn;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Support\Facades\App;

class FriendsController extends Controller{
    
    public function getResults(){
        
      $user_friends = Follower::where('following_id','=', Auth::user()->id)
      ->where('isFriend','LIKE',true)->get();
        return view('user.friends')->with('user_friends', $user_friends);
    }
}