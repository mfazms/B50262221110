<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 7;
        $b = 3;
        $c = $a * $b ;
        return "<h1>Hasil Perkalian : " . $c . "</h1>";
    }

    public function biodata(){
        $nama = "Diki Alfarabii Hadi";
        $alamat = "Surabaya";
        $umur = 18;
        return view('biodata', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showjam($jam){
        return "<h2>Sekarang Jam : " . $jam . "</h2>" ;
    }
    public function formulir(){

    	return view('formulir');
    }

     public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
         $nrp = $request->input('nrp');
        return "Anda telah mengisikan : <br> Nama : ".$nama.",
        Alamat : ".$alamat.",
        NRP : " . $nrp . "<br>";
    }

}
