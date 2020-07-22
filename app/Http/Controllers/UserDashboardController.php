<?php

namespace App\Http\Controllers;

use App\Http\Middleware\UserLoginCheck;
use App\Pendaftaran;
use App\ProgramKursus;
use App\User;
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

    public function dashboard(Pendaftaran $pendaftaran)
    {
        $user_id = Auth::id();
        $user_info = Auth::user();

        $dashboard_info = $pendaftaran->where('id_user', '=', $user_id)->with(['program_kursus'])->get();
        // return $dashboard_info;
        return view('user-panel.dashboard', compact('dashboard_info', 'user_info'));
    }
    public function sertifikat(User $user)
    {
        $id = Auth::id();
        $user_info = $user->where('id', '=', $id)->with('sertifikats')->first();
        return view('user-panel.sertifikat', compact('user_info'));
    }
    public function pengaturan()
    {
        $user_info = Auth::user();
        return view('user-panel.pengaturan', compact('user_info'));
    }

    public function gantiPasswordView()
    {
        $user_info = Auth::user();
        return view('user-panel.pengaturan-ganti-password', compact('user_info'));
    }
}
