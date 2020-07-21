<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserLoginCheck;
use App\ProgramKursus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(UserLoginCheck::class);
    // }
    public function registerView()
    {
        $program_kursus = ProgramKursus::all();
        return view('register', compact('program_kursus'));
    }

    public function dashboard()
    {
        $user_id = Auth::id();
        $user_info = Auth::user();


        // return view('user-panel.dashboard',compact());
    }
    public function sertifikat()
    {
        return view('user-panel.sertifikat');
    }
    public function pengaturan()
    {
        return view('user-panel.pengaturan');
    }
}
