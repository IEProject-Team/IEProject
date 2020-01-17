<?php

namespace App\Http\Controllers;
use App\Follower;
use App\User;
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
        /*$follow = New Follower;
        $follow->user_id = Auth::user()->id;
        $follow->following_id = $request['id'];
        $follow->isFriend = false;
        $follow->save();
        return back();*/
        $following_id = $request['id'];

        $folowing = User::find($following_id);
        if(!$folowing){
            return back();
        }
        $user = Auth::user();
        // a boolean varaible below
        $follow = $user->follows()->where('following_id', $following_id)->first();
        //if already follow that one
        if($follow){
            // now we check if friend or just follow
            $already_friend = $follow->isFriend;
            if($already_friend == true){
                $follow->delete();
                return back();
            }else{
                $follow->delete();
                return back();
            }
        }else{
            $follow = new Follower();
            
        }
        $follow->isFriend = false;
        /// we use the user defined up here
        $follow->user_id = $user->id;
        $follow->following_id = $following_id;
        $follow->save();
        return back();
    }
}
