@extends('master')

@section('Title', 'Data Sandal Nischaverta')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>List Stock Sandal Nischaverta</h3>

	<button onclick="window.location.href='/sandal'" class="btn btn-warning">Kembali</button>


	<br/>
	<br/>

<form action="/sandal/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="MerkSandal" class="col-sm-1 col-form-label text-right">Merk Sandal</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="MerkSandal" name="MerkSandal">
            </div>
        </div>
        <div class="form-group row">
            <label for="StockSandal" class="col-sm-1 col-form-label text-right">Stock Sandal</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="StockSandal" name="StockSandal">
            </div>
        </div>
        <br/>
        <input type="submit" class="btn btn-success" value="Simpan Data">
    </form>
@endsection
