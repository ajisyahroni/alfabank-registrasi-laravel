<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function oldLogin()
    {
        // $data = DB::select("SELECT * FROM `users` WHERE email = 'kari.orn@example.com' and password = 'barjono'");
        $data = DB::table('users')->where('email', '=', 'kari.orn@example.com')->where('password', '=', 'barjono')->first();
        // dd($data->id);
        session(['email_user' => $data->email]);
        // return $request->session()->all();
        return response('congrats')->cookie('email_user', $data->email, 120);
    }
    public function oldDash(Request $request)
    {
        $session_email = $request->session()->get('email_user');
        $cookie_email = $request->cookie('email_user');
        $sts = $cookie_email == $session_email;
        // return $sts;
        if ($session_email && $cookie_email) {
            if ($sts) {
                return 'welcome to dashboard <a href="/logout" >logout</>';
            }
        } else {
            return 'bad login';
        }
    }
    public function userDashboard()
    {
        return view('user-panel.dashboard');
    }
    public function login(User $user)
    {
        $kredensial = request()->only(['email', 'password']);
        $user = Auth::attempt($kredensial);
        if ($user) {
            return redirect()->to('/user/dashboard');
        } else {
            return redirect()->to('/login');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->to('/');
    }
    public function register(User $user, Pendaftaran $pendaftaran, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|string',
            'email' => 'required|string',
            'telepon' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'gender' => 'required',
            'agama' => 'required',
            'password' => 'required',
        ]);
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->telepon = $request->telepon;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->gender = $request->gender;
        $user->agama = $request->agama;
        $user->password = bcrypt($request->password);

        $user->save();

        $pendaftaran->id_user = $user->id;
        $pendaftaran->id_program_kursus = $request->program_kursus;
        $pendaftaran->save();

        return redirect()->to('login');
    }
}
