<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(User $user)
    {
        $kredensial = request()->only(['email', 'password']);
        $user = Auth::attempt($kredensial);
        if ($user) {
            $user_info = Auth::user();
            return view('user-panel.dashboard', compact('user_info'));
        }
    }
    public function register(User $user, Request $request)
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
        return redirect()->to('login');
    }
}
