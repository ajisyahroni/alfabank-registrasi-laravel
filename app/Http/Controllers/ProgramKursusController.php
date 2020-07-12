<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProgramKursusRequest;
use App\ProgramKursus;
use Illuminate\Http\Request;

class ProgramKursusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProgramKursus $programKursus)
    {
        $programKursuses = $programKursus::all();
        return view('admin-panel.program-kursus', compact('programKursuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProgramKursusRequest $request)
    {
        ProgramKursus::create($request->all());
        session()->flash('success', 'berhasil menambahkan data baru');
        return back();
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
     * @param  \App\ProgramKursus  $programKursus
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramKursus $programKursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramKursus  $programKursus
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramKursus $programKursus)
    {
        return view('admin-panel.program-kursus-update', compact('programKursus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramKursus  $programKursus
     * @return \Illuminate\Http\Response
     */
    public function update(ProgramKursusRequest $request, ProgramKursus $programKursus)
    {
        $programKursus->update($request->all());
        session()->flash('success','berhasil mengupdate program kursus');
        return redirect()->route('admin.program-kursus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramKursus  $programKursus
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramKursus $programKursus)
    {
        $programKursus->delete();
        session()->flash('success', 'berhasil menghapus');
        return back();
    }
}
