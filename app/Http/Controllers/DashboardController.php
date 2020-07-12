<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Pendaftaran $pendaftaran, User $user)
    {

        $users = $pendaftaran::with('user')->with('program_kursus')->paginate(5);
        return view('admin-panel.dashboard', compact('users'));
    }
    public function show($id_pendaftaran)
    {
        // return $id_pendaftaran;
        $user = Pendaftaran::with('user')->with('program_kursus')->where('id', $id_pendaftaran)->first();
        return $user;
        // return view('admin-panel.detail-siswa',compact('user'));
    }
}
