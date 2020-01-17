<?php

namespace App\Http\Controllers;
use App\Follow;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as cn;

class FollowController extends Controller
{
    public function postFollowUser(Request $request){
        $following_id = $request['followingId'];

        $folowing = User::find($following_id);
        if(!$folowing){
            return null;
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
                return null;
            }else{
                $follow->delete();
                return null;
            }
        }else{
            $follow = new Follow();
            
        }
        $follow->isFriend = false;
        /// we use the user defined up here
        $follow->user_id = $user->id;
        $follow->following_id = $follow->id;
        $follow->save();
        return null;

    }
    public function follwUserRequest(Request $request){


        $user = User::find($request->user_id);
        $response = auth()->user()->toggleFollow($user);


        return response()->json(['success'=>$response]);
    }
}
