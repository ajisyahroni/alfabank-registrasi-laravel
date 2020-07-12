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

Route::view('/register','register');
Route::view('/login','login');

// Route::group(["prefix"=>"user"], function(){
    Route::view('user-dashboard','user-panel.dashboard')->name('user.dashboard');
    Route::view('user-sertifikat','user-panel.sertifikat')->name('user.sertifikat');
    Route::view('user-pengaturan','user-panel.pengaturan')->name('user.pengaturan');
// });




// Route::name("admin")->group(function(){
    Route::get('admin-dashboard','DashboardController@index')->name('admin.dashboard');
    Route::get('admin-detail-siswa/{pendaftaran}','DashboardController@show')->name('admin.detail-siswa');
    Route::view('admin-inbox','admin-panel.inbox')->name('admin.inbox');
    Route::view('admin-inbox-sudah-dibaca','admin-panel.inbox-sudah-dibaca')->name('admin.inbox-sudah-dibaca');
    Route::view('admin-sertifikasi','admin-panel.sertifikasi')->name('admin.sertifikasi');
    
    // GET ALL PROGRAM KURSUS
    Route::get('admin-program-kursus','ProgramKursusController@index')->name('admin.program-kursus');
    // DELETE PROGRAM KURSUS
    Route::delete('admin-program-kursus/{program_kursus:id}/delete','ProgramKursusController@destroy')->name('admin.delete-program-kursus');
    // ADD PROGRAM KURSUS
    Route::post('admin-program-kursus/create','ProgramKursusController@create')->name('admin.create-program-kursus');
    //UPDATE PROGRAM KURSUS
    Route::get('admin-program-kursus-edit/{program_kursus:id}/edit','ProgramKursusController@edit')->name('admin.program-kursus-edit');
    Route::patch('admin-program-kursus/{program_kursus:id}/update','ProgramKursusController@update')->name('admin.program-kursus-update');

    
    Route::view('admin-pengaturan','admin-panel.pengaturan')->name('admin.pengaturan');
// });