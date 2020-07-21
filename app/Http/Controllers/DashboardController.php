<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->query('search');
        $likeKeyword = "%$keyword%";
        // $likeSearch = Pendaftaran::with([
        //     'user' => function ($query) use ($likeKeyword) {
        //         $query->where('nama', 'like', $likeKeyword);
        //     },
        //     'program_kursus'
        // ])
        //     ->get();

        $likeSearch = User::where('nama', 'like', $likeKeyword)->get('id');
        $users = Pendaftaran::with('user', 'program_kursus')->whereHas('user', function ($query) use ($likeKeyword) {
            $query->where('nama', 'like', $likeKeyword);
        })->paginate(5);
        // $likeSearch = DB::select("SELECT * FROM `pendaftarans` INNER JOIN users ON users.nama LIKE '$likeKeyword'");

        // return $pendaftaran;
        return view('admin-panel.dashboard', compact('users'));

    }

    public function index(Pendaftaran $pendaftaran, User $user)
    {

        $users = $pendaftaran::with('user')->with('program_kursus')->paginate(5);
        return view('admin-panel.dashboard', compact('users'));
    }
    public function show($id_pendaftaran)
    {
        // return $id_pendaftaran;
        $user = Pendaftaran::with('user')->with('program_kursus')->where('id', $id_pendaftaran)->find($id_pendaftaran);
        // return $user;
        return view('admin-panel.detail-siswa', compact('user'));
    }
    public function updateStatusSiswa($id_pendaftaran, Request $request)
    {
        // dd($id_pendaftaran);
        $pendaftar = Pendaftaran::find($id_pendaftaran);
        $pendaftar->status = $request->status;
        $pendaftar->save();
        return redirect()->to('admin/dashboard');
    }
}
