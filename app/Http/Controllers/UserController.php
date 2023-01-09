<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function loadProfileUser(){

        $user_data = DB::table('users')->where('id', '=', Auth::user()->id)->get();

        // dd($user_data);

        if(Auth::user()->role == 'admin'){
            return view('admin.profile_admin', [
                'user_data' => $user_data
            ]);
        }else{
            return view('member.profile_member', [
                'user_data' => $user_data
            ]);
        }
        
    }

    public function loadUpdatePage(){
        $user_data = DB::table('users')->where('id', '=', Auth::user()->id)->first();

        // dd($user_data);

        return view('member.update_profile', [
            'user_data' => $user_data
        ]);
    }

    public function updateProfile(Request $request)
    {
        $user_data = DB::table('users')->where('id', '=', Auth::user()->id)->limit(1);

        $request->validate([
            'username' => 'required|min:5|max:20',
            'email' => 'required|email|',
            'phone_number' => 'required|min:10|max:13',
            'address' => 'required|min:5'
        ]);

        $user_data->update([
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'address' => $request->address
        ]);

        return redirect('/profile');
    }

    public function loadUpdatePasswordPage(){
        if(Auth::user()->role == 'admin'){
            return view('admin.update_password_admin');
        }else{
            return view('member.update_password_member');
        }
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:5|max:20',
            'new_password' => 'required|min:5|max:20',
        ]);
        
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }
        
        if(strcmp($request->old_password, $request->new_password) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }
        
        //Change Password

        $id = Auth::user()->id;
        $user_data = User::find($id);
        $user_data->password = bcrypt($request->new_password);
        $user_data->save();

        // dd($user_data);

        return redirect('/profile');
    }

    
}
