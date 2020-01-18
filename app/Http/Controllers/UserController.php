<?php
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as cn;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller{
    
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
        $user = Auth::user();
        if( Auth::attempt(['email' => $request['email'], 'password' => $request['password']]))
            return redirect()->route('dashboard');
        else{
            return redirect()->route('home')->with(['error' =>'Sign in info is incorrect ! ']);
        }
    }

    public function getLogout()
    {
      Auth::logout(); 
      return redirect()->route('home');
    }

    public function getBackDashboard()
    {
      return redirect()->route('dashboard');
    }

    public function getToProfilePage(){
        return view('user.profile')->with('user_id', auth()->user()->id);
    }

    public function changeTheName(Request $request){
        $this->Validate($request,[
            'first_name'=>'required|max:120'
        ]);

        $first_name = $request['first_name'];

        $user = User::find(auth()->user()->id);
        $user->first_name = $first_name;
        $user->update();
        Auth::login($user);
        return redirect()->route('dashboard');
    }

    public function changeTheEmail(Request $request){
        $this->Validate($request,[
            'email'=>'required|email|unique:users'
        ]);

        $email = $request['email'];

        $user = User::find(auth()->user()->id);
        $user->email = $email;
        $user->update();
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}