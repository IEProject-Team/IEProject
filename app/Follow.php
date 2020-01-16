<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public function user(){
        return $this->belongsTo('App/User');
    }

    public function following(){
        return $this->belongsTo('App/User');
    }
    
}
