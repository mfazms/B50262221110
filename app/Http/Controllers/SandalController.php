<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SandalController extends Controller
{

    public function index()
	{
    	// mengambil data dari table mahasiswa
		//$pegawai = DB::table('pegawai')->get();
        $sandal = DB::table('sandal')
        ->get();
    	// mengirim data pegawai ke view index
		return view('sandal',['sandal' => $sandal]);

	}

	// method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('sandaltambah');

	}

	// method untuk insert data ke table pegawai
	public function store(Request $request)
	{

        if ($request->StockSandal > 0) $request->KetersediaanSandal = 1;
        else $request->KetersediaanSandal =0;
		// insert data ke table pegawai
		DB::table('sandal')->insert([
            'KodeSandal' => $request->KodeSandal,
			'MerkSandal' => $request->MerkSandal,
			'StockSandal' => $request->StockSandal,
            'KetersediaanSandal' => $request->KetersediaanSandal
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sandal');

	}

    // method untuk edit data sandal
	public function edit($KodeSandal)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sandal = DB::table('sandal')->where('KodeSandal',$KodeSandal)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('sandaledit',['sandal' => $sandal]);

	}

	// update data sandal
	public function update(Request $request)
	{

        if ($request->StockSandal > 0) $request->KetersediaanSandal = 1;
        else $request->KetersediaanSandal = 0;

		// update data pegawai
		DB::table('sandal')->where('KodeSandal',$request->KodeSandal)->update([
			'KodeSandal' => $request->KodeSandal,
			'MerkSandal' => $request->MerkSandal,
			'StockSandal' => $request->StockSandal,
			'KetersediaanSandal' => $request->KetersediaanSandal
		]);
		// alihkan halaman ke halaman data sandal awal
		return redirect('/sandal');
	}

    // method untuk lihat data sandal
    public function view($KodeSandal)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
		$sandal = DB::table('sandal')->where('KodeSandal',$KodeSandal)->get();
		// passing data pegawai yang didapat ke view view.blade.php
		return view('sandalview',['sandal' => $sandal]);

    }



	// method untuk hapus data sandal
	public function hapus($KodeSandal)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sandal')->where('KodeSandal',$KodeSandal)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sandal');
	}



    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sandal = DB::table('sandal')
		->where('MerkSandal' ,'like',"%".$cari."%")
        ->orWhere('KodeSandal', 'like', "%" . $cari . "%")
        ->orWhere('StockSandal', 'like', "%" . $cari . "%")
        ->orWhere('KetersediaanSandal', 'like', "%" . $cari . "%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('sandal',['sandal' => $sandal, 'cari' => $cari]);

	}


}
