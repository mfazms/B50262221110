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

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam' );
Route::get('formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');


Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');
Route::get('/mahasiswa/tambahnilai','App\Http\Controllers\MahasiswaController@tambah');
Route::post('/mahasiswa/store','App\Http\Controllers\MahasiswaController@store');
Route::post('/mahasiswa/update','App\Http\Controllers\MahasiswaController@update');

Route::get('/mahasiswa/cari','App\Http\Controllers\MahasiswaController@cari');

Route::get('/keranjangbelanja','App\Http\Controllers\BelanjaController@shop');
Route::get('/keranjangbelanja/batal/{ID}','App\Http\Controllers\BelanjaController@batal');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\BelanjaController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\BelanjaController@store');


Route::get('/sandal','App\Http\Controllers\SandalController@index');
Route::get('/sandal/sandaltambah','App\Http\Controllers\SandalController@tambah');
Route::post('/sandal/store','App\Http\Controllers\SandalController@store');
Route::get('/sandal/sandaledit/{id}','App\Http\Controllers\SandalController@edit');
Route::get('/sandal/sandalview/{id}','App\Http\Controllers\SandalController@view');
Route::post('/sandal/update','App\Http\Controllers\SandalController@update');
Route::get('/sandal/hapus/{id}','App\Http\Controllers\SandalController@hapus');
Route::get('/sandal/cari','App\Http\Controllers\SandalController@cari');

