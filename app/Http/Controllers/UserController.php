<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as cn;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
    
    public function getDashboard(){
        return view('dashboard');
    }
    public function postSignUp(Request $request){

        $this->Validate($request,[
            'email'=>'required|email|unique:users',
            'first_name'=>'required|max:120',
            'password'=>'required|min:4'
        ]);

        $email = $request['email'];
        $first_name = $request['first_name'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->first_name = $first_name;
        $user->password = $password;
        $user->save();
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function postSignIn(Request $request){

        $this->Validate($request,[
            'email'=>'required',
            'password'=>'required'
        ]);

        if( Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
            return redirect()->route('dashboard');
        else{
            
            return redirect()->back();
        }
    }
}


