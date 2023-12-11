<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{

    public function index()
	{
    	// mengambil data dari table chat (sesuai nama tabel di sql)
        $chat = DB::table('chat')
        ->get();
    	// mengirim data sandal ke view yaitu chatview (sesuai nama index yg ada yaitu sandal.blade.php)
		return view('chatview',['chat' => $chat]);

	}

    // method untuk lihat data sandal
    public function view($id)
    {
        // mengambil data chat berdasarkan kodesandal (primarykeynya) yang dipilih
		$chat = DB::table('chat')->where('id',$id)->get();
		// passing data sandal yang didapat ke chatview.blade.php
		return view('chatview',['chat' => $chat]);

    }

}
