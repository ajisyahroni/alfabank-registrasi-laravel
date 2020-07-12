<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/register', 'register');
Route::view('/login', 'login');
Route::post('/user-login', 'UserController@login')->name('user.login');

Route::group(["prefix" => "user"], function () {
    Route::view('dashboard', 'user-panel.dashboard')->name('user.dashboard');
    Route::view('sertifikat', 'user-panel.sertifikat')->name('user.sertifikat');
    Route::view('pengaturan', 'user-panel.pengaturan')->name('user.pengaturan');
});




Route::group(["prefix" => "admin"], function () {
    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('detail-siswa/{pendaftaran}', 'DashboardController@show')->name('admin.detail-siswa');
    Route::view('inbox', 'admin-panel.inbox')->name('admin.inbox');
    Route::view('inbox-sudah-dibaca', 'admin-panel.inbox-sudah-dibaca')->name('admin.inbox-sudah-dibaca');
    Route::view('sertifikasi', 'admin-panel.sertifikasi')->name('admin.sertifikasi');

    // GET ALL PROGRAM KURSUS
    Route::get('program-kursus', 'ProgramKursusController@index')->name('admin.program-kursus');
    // DELETE PROGRAM KURSUS
    Route::delete('program-kursus/{program_kursus:id}/delete', 'ProgramKursusController@destroy')->name('admin.delete-program-kursus');
    // ADD PROGRAM KURSUS
    Route::post('program-kursus/create', 'ProgramKursusController@create')->name('admin.create-program-kursus');
    //UPDATE PROGRAM KURSUS
    Route::get('program-kursus-edit/{program_kursus:id}/edit', 'ProgramKursusController@edit')->name('admin.program-kursus-edit');
    Route::patch('program-kursus/{program_kursus:id}/update', 'ProgramKursusController@update')->name('admin.program-kursus-update');


    Route::view('pengaturan', 'admin-panel.pengaturan')->name('admin.pengaturan');
});
