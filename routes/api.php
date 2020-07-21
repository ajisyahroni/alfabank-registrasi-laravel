<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(["prefix" => "alumni"], function () {
    Route::post('login','UserController@alumniLogin');
    Route::get('blogs','BlogController@index')->middleware('auth:sanctum');
});

// Route::middleware('auth:sanctum')->get('/alumni/blogs', function (Request $request) {
//     Route::get('blogs','BlogController@index');
// });
