<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }  
      
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        if($request->remember){
            Cookie::queue('email_cookie', $email);
            Cookie::queue('password_cookie', $password, 2);
        }

        $credentials = [
            'email' => $email,
            'password' => $password
        ];

        // dd($credentials);

        if (Auth::attempt($credentials, true)){

            $request->session()->put("mySession", $credentials); 
            // Session::put('mySession', $credentials);
            
            // dd(Auth::user()->role);


            if(Auth::user()->role == 'admin'){
                return redirect('/home');
            }else{
                return redirect('/home');
            }
            
        }

        return redirect('/login');

    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function registerPage()
    {
        return view('register');
    }
      
    public function register(Request $request)
    {  
        var_dump($request->all());

        $email = $request->email;
        $password = $request->password;
        $username = $request->username;
        $phone_number = $request->phone_number;
        $address = $request->address;

        $this->validate($request, [
            'username' => 'required|min:5|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
            'phone_number' => 'required|min:10|max:13',
            'address' => 'required|min:5'
        ]);

        User::insert([

            'email' => $email,
            "password" => bcrypt($password),
            'username' => $username,
            'phone_number' => $phone_number,
            'address' => $address,
            "role" => "member"
        ]); 
           
        $credentials = [

            "email" => $email,
            "password" => $password
        ];

        // Login
        if (Auth::attempt($credentials)) {

            $request->session()->put('mySession', $credentials);
            return redirect("/login");
        }

        return "fail";
    }

}

