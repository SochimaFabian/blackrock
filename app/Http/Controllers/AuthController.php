<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserBalance;
// use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
    	return view('auth.login');
    }
    public function signup(){
    	return view('auth.signup');
    }

    public function createuser(Request $request){
    	$data = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'mobile' => 'required|numeric',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);
        $bal = new UserBalance();
        $bal->balance = 10;
        $bal->user_id = $user->id;
        $bal->save();
        auth()->login($user);
        return redirect('user/' . auth()->user()->id . '/dashboard');
    }

     public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('user/' . auth()->user()->id . '/dashboard');
        } else {
        	return redirect()->route('login')->with('message', 'Credentials not found!');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect(route('login'));
    }

}
