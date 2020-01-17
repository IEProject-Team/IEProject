<?php

namespace App\Http\Controllers;
use App\Follower;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Routing\Controller as cn;
use Illuminate\Support\Facades\Auth;

class FollowingController extends Controller
{
    public function allUsers(){
        $allUsers = User::all();
        return view('userfriends', compact('allUsers'));
    }
    public function following(Request $request){
        $follow = New Follower;
        $follow->user_id = Auth::user()->id;
        $follow->following_id = $request['id'];
        $follow->isFriend = false;
        $follow->save();
        return back();
    }
}
