@extends('master')

@section('title','Data Nilai Mahasiswa')

@section('konten')

<h2>Sistem Informasi ITS 2023</h2>
<h3>Data Nilai Mahasiswa P.WEB B</h3>

	<button onclick="window.location.href='/mahasiswa'" class="btn btn-warning">Kembali</button>

	<br/>
	<br/>

<form action="/mahasiswa/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="jabatan" class="col-sm-2 col-form-label text-right" style="font-weight: 600">NRP</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label text-right" style="font-weight: 600">Nilai Angka</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-sm-2 col-form-label text-right" style="font-weight: 600">SKS</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <br/>
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </form>
@endsection
