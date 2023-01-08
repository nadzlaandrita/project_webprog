<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function editPassword(Request $request, $id)
    {
        //UPDATE PRODUCT
        $user = User::find($id);
        $user->password = $request->inputPassword;
        $user->save();

        return redirect('/profile-admin');
    }


}
