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
        /* bayad takmil bshe
        $user_friends = User::where('id','LIKE', "10")
          ->orWhere('id','LIKE',"9")
          ->get();
        */
        $search_query = Auth::user()->id;
        $user_friends = Follower::where('following_id','=', $search_query)
        ->get();
        return view('user.friends')->with('user_friends', $user_friends);
    }
}