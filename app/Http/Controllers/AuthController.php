<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }  
      
    public function loginMember(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt([$credentials])){
            return redirect('home-member');
        }

        return 'fail';

    }

    public function logout(){
        Auth::logout();
        return redirect('welcomepage');
    }

    public function registration()
    {
        return view('register');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'username' => 'required|min:5|max:20',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:20',
            'phoneNumber' => 'required|min:10|max:13',
            'address' => 'required|min:5'

        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("home_member")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phoneNumber' => $data['phone_number'],
        'address' => $data['address']
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            return view('home_member');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}

