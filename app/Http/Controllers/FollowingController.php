<?php

namespace App\Http\Controllers;
use App\Follower;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function allUsers(){
        $allUsers = User::all();
        return view('userfriends', compact('allUsers'));
    }
    public function following($id){
        $follow = New Follower;
        $follow->user_id = Auth::user()->id;
        $follow->follow_id = $id;
        $follow->save();
        return back();
    }
}
