<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{

    public function index()
	{
    	// mengambil data dari table nilaikuliah
        $nilaikuliah = DB::table('nilaikuliah')
        ->get();
    	// mengirim data mahaiswa ke view index
		return view('database',['nilaikuliah' => $nilaikuliah]);

	}

	// method untuk menampilkan view form tambah mahasiswa
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

	// method untuk insert data ke table nilaikuliah
	public function store(Request $request)
	{
		// insert data ke table nilaikuliah
		DB::table('nilaikuliah')->insert([
			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman awal mahasiswa
		return redirect('/mahasiswa');

	}
    
    public function cari(Request $request)
    {
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table sandal sesuai pencarian data
		$nilaikuliah = DB::table('nilaikuliah')
		->where('NRP' ,'like',"%".$cari."%")
        // ->orWhere('KodeSandal', 'like', "%" . $cari . "%")
        // ->orWhere('StockSandal', 'like', "%" . $cari . "%")
        // ->orWhere('KetersediaanSandal', 'like', "%" . $cari . "%")
		->paginate();

    		// mengirim data sandal ke view index awal
		return view('database',['nilaikuliah' => $nilaikuliah, 'cari' => $cari]);

	}


}
