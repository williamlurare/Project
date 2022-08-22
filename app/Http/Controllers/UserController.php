<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserVerify;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    //Show Register/Create Form
    public function register() {
        return view('user.register');
    }

    public function create(array $user)
    {
      return User::create([
        'name' => $user['name'],
        'email' => $user['email'],
        'password' => Hash::make($user['password'])
      ]);
    }

    //Create New User
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        //Verify
        $user = $request->all();
        $createUser = $this->create($user);
  
        $token = Str::random(64);
  
        UserVerify::create([
              'user_id' => $createUser->id, 
              'token' => $token
            ]);
  
        Mail::send('email.emailVerificationEmail', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Email Verification Mail');
          });
         
          return redirect('login')->with('message', 'User created and Go ahead and Login!');
   
    }
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been 
        logged out!');
    }

    //Show login form

    public function login() {
        return view('user.login');
    }

    //User Authentication
    public function auth(Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/home')
                        ->with('message', 'You have Successfully logged In');
        }
  
        return redirect('login')->with('message', 'Oppes! You have entered invalid credentials');
    }
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('/');
        }
  
        return redirect("login")->with('message', 'Opps! You do not have access');
    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
  
        $message = 'Sorry your email cannot be identified.';
  
        if(!is_null($verifyUser) ){
            $user = $verifyUser->user;
              
            if(!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }
  
      return redirect()->route('login')->with('message', $message);
    }
}
