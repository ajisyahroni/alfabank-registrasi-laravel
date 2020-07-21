<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use App\Sertifikat;
use App\User;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_masa_studi = Pendaftaran::with(['user', 'program_kursus'])->where('status', '=', 'masa_studi')->paginate(5);
        // dd($user_masa_studi);
        return view('admin-panel.sertifikasi', compact('user_masa_studi'));
    }
    public function lulusSertifikasi(Pendaftaran $pendaftaran, Sertifikat $sertifikat)
    {
        $pendaftaran->status = "lulus";

        $sertifikat->nilai = 100;
        $sertifikat->kode_sertifikat = "ALFA/" . $pendaftaran->id . $pendaftaran->created_at;
        $sertifikat->id_pendaftaran = $pendaftaran->id;

        $pendaftaran->save();
        $sertifikat->save();

        return redirect()->back();
    }

    public function tersertifikasi(Sertifikat $sertifikat)
    {
        $user_tersertifikasi = User::with('sertifikats', 'program_kursuses')->whereHas('sertifikats', function ($query) {
            $query->where('id_pendaftaran', '!=', null);
        })->paginate(5);
        // return $user_tersertifikasi;

        // $user_tersertifikasi = Sertifikat::with('pendaftaran')->paginate();
        // return $tersertifikasi;
        return view('admin-panel.tersertifikasi',compact('user_tersertifikasi'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function show(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function edit(Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sertifikat $sertifikat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sertifikat  $sertifikat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sertifikat $sertifikat)
    {
        $sertifikat->delete();
        return redirect()->back();
    }
}
