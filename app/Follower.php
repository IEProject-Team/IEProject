<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function following(){
        return $this->belongsTo('App\User');
    }
    public function getID() {
        return $this->id;
    }
    public function getFollowingId() {
        return $this->following_id;
    }
    public function getUserId() {
        return $this->user_id;
    }
}
