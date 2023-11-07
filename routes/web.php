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
    return view('Home');
});

Route::get('tugas1', function () {
    return view('tugas1');
});

Route::get('/halo2', function () {
    return "<h1>Haloo Apa Kabar</h1>";
});

Route::get('tugas2', function () {
    return view('tugas2');
});

Route::get('tugas2v', function () {
    return view('tugas2v');
});

Route::get('tugas3', function () {
    return view('tugas3');
});

Route::get('tugas4a', function () {
    return view('tugas4a');
});

Route::get('tugas4b', function () {
    return view('tugas4b');
});

Route::get('tugas7', function () {
    return view('tugas7');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index' );
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata' );
