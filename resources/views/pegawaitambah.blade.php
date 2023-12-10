@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<button onclick="window.location.href='/pegawai'" class="btn btn-warning">Kembali</button>


	<br/>
	<br/>

<form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        
        <div class="form-group row">
            <label for="nama" class="col-sm-1 col-form-label text-right">Nama</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="nama" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="jabatan" class="col-sm-1 col-form-label text-right">Jabatan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="jabatan" name="jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-1 col-form-label text-right">Umur</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="umur" name="umur">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-sm-1 col-form-label text-right">Alamat</label>
            <div class="col-sm-10">
            <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
            </div>
        </div>
        <br/>
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </form>
@endsection
