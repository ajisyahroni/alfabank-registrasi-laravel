<?php

use App\Http\Middleware\UserLoginCheck;
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

Route::get('/register', 'UserDashboardController@registerView');
Route::view('/login', 'login');

Route::post('/user-login', 'UserController@login')->name('user.login');
Route::post('/user-register', 'UserController@register')->name('user.register');


Route::middleware(UserLoginCheck::class)->group(function () {
    Route::group(["prefix" => "user"], function () {
        Route::get('dashboard', 'UserDashboardController@dashboard')->name('user.dashboard');
        Route::get('sertifikat', 'UserDashboardController@sertifikat')->name('user.sertifikat');
        Route::get('pengaturan', 'UserDashboardController@pengaturan')->name('user.pengaturan');
        Route::get('pengaturan-ganti-password', 'UserDashboardController@gantiPasswordView')->name('user.pengaturan-ganti-password');
        Route::get('logout', 'UserController@logout')->name('user.logout')->withoutMiddleware(UserLoginCheck::class);

        // some action on dashboard users
        Route::patch('pengaturan-update/{user:id}', 'UserController@update')->name('user.pengaturan-update');
        Route::patch('pengaturan-ganti-password/{user:id}', 'UserController@gantiPassword')->name('user.pengaturan-ganti-password-action');

    });
});





Route::group(["prefix" => "admin"], function () {

    Route::view('/login', 'admin-panel.login');
    Route::post('/admin-login', 'AdminController@login')->name('admin.login');


    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('detail-siswa/{pendaftaran}', 'DashboardController@show')->name('admin.detail-siswa');
    Route::patch('update-status-siswa/{id_pendaftaran}', 'DashboardController@updateStatusSiswa')->name('admin.update-status-siswa');

    Route::get('inbox', 'InboxController@index')->name('admin.inbox');
    Route::get('inbox-sudah-dibaca', 'InboxController@indexSudahDibaca')->name('admin.inbox-sudah-dibaca');
    Route::patch('update-status-inbox/{inbox:id}', 'InboxController@updateStatusInbox')->name('admin.update-status-inbox');
    Route::delete('delete-inbox/{inbox:id}', 'InboxController@destroy')->name('admin.delete-inbox');

    Route::get('sertifikasi', 'SertifikatController@index')->name('admin.sertifikasi');
    Route::get('tersertifikasi', 'SertifikatController@tersertifikasi')->name('admin.tersertifikasi');
    Route::patch('lulus-sertifikasi/{pendaftaran:id}', 'SertifikatController@lulusSertifikasi')->name('admin.lulus-sertifikasi');
    Route::delete('suspend-sertifikasi/{sertifikat:id}', 'SertifikatController@destroy')->name('admin.suspend-sertifikasi');


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
