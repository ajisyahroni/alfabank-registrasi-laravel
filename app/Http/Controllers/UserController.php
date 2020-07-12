<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(User $user)
    {
        $kredensial = request()->only(['email','password']);
        $user = Auth::attempt($kredensial);
        if($user){
            $user_info = Auth::user();
            return view('user-panel.dashboard',compact('user_info'));
        }
    }
}
