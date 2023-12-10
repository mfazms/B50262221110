<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function shop()
	{
    	// mengambil data dari table keranjang belanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

        // $keranjangbelanja = DB::table('keranjangbelanja')
        //                 ->orderBy('ID','asc');

    	// mengirim data keranjang belanja ke view index
		return view('shop',['keranjangbelanja' => $keranjangbelanja]);

	}

	// method untuk menampilkan view form tambah barang belanjaan
	public function beli()
	{

		// memanggil view tambah
		return view('beli');

	}

	// method untuk insert data ke table keranjang belanja
	public function store(Request $request){
    // Validate the request, including the image file
    // $request->validate([
    //     'ID' => 'required|integer',
    //     'KodeBarang' => 'required|integer',
    //     'Jumlah' => 'required|integer',
    //     'Harga' => 'required|integer',
    // ]);

    DB::table('keranjangbelanja')->insert([
        'KodeBarang' => $request->KodeBarang,
        'Jumlah' => $request->Jumlah,
        'Harga' => $request->Harga,
    ]);

    // Redirect to the '/keranjangbelanja' route after successfully storing data
    return redirect('/keranjangbelanja');
}

	// method untuk hapus data belanjaan
	public function batal($ID)
	{
		// menghapus data belanjaan berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$ID)->delete();

		// alihkan halaman ke halaman awal keranjangbelanja
		return redirect('/keranjangbelanja');
	}


    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table keranjangbelanja sesuai pencarian data
		$keranjangbelanja = DB::table('keranjangbelanja')
		->where('KodeBarang' ,'like',"%".$cari."%")
		->paginate();

    		// mengirim data sandal ke view index awal
		return view('shop',['keranjangbelanja' => $keranjangbelanja, 'cari' => $cari]);

	}
}
