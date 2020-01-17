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
        // check user does not follow self
        if($following_id == $user->id){     
            return back();
        }
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


    public function acceptFriend(Request $request){
        
        $follower_id = $request['id'];
        $follower = User::find($follower_id);
        if(!$follower){
            return back();
        }
        $user = Auth::user();
        $user_id = $user->id;

        $follow = $follower->follows()->where('following_id', $user_id)->first();
        //if already follow that one
        if($follow){
            // now we check if friend or just follow
            $already_friend = $follow->isFriend;
            if($already_friend == true){
                return back();
            }else{
                $follow->isFriend = true;
                $follow->update();
                return back();
            }
        }
        return back();
    }

    public function rejectFriend(Request $request){
        
        $follower_id = $request['id'];
        $follower = User::find($follower_id);
        if(!$follower){
            return back();
        }
        $user = Auth::user();
        $user_id = $user->id;

        $follow = $follower->follows()->where('following_id', $user_id)->first();
        //if already follow that one
        if($follow){

            $follow->delete();
            return back();
            
        }
        return back();
    }
    
}

 
?>