<?php
namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements Authenticatable{
        use \Illuminate\Auth\Authenticatable;
        public function posts()
        {
             return $this->hasMany('app\Post');
        }

        public function getID() {
                return $this->id;
        }
        public function getFirstName() {
                return $this->first_name;
        }
        public function getEmail() {
                return $this->email;
        }
        public function likes(){
                return $this->hasMany('App\Like');
        }
}

?>