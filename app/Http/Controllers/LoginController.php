<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
       return view('pages.login');
    }

    public function login(LoginRequest $request)
    {

        
        $email=$request->input('email');
        $password=$request->input('password');
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $user=User::where("email", $email)->first();
            Auth::login($user);
 
            return redirect('/dashboard');
        }else{
            return redirect()->back()->with('message', 'Invalid credentials');
        }
    }

    public function logout()
    {
       Auth::logout();
       return response()->json(["success"=>true]);
    }
}
