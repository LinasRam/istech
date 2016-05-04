<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function getSignUpPage(){
        return view('admin.signup');
    }

    public function postSignUp(Request $request){
        $this->validate($request, [
            'name' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required'
        ]);
        
        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect()->route('admin');
    }

    public function postLogIn(Request $request){
        if(Auth::attempt(['name' => $request['name'], 'password' => $request['password']])){
            return redirect()->route('admin');
        }
        return redirect()->back();
    }

    public function getLogOut(){
        Auth::logout();

        return redirect()->route('home');
    }

}
