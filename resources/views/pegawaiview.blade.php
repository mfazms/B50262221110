@extends('master')
@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<button onclick="window.location.href='/pegawai'" class="btn btn-warning">Kembali</button>

	<br/>
	<br/>
    @foreach ($pegawai as $p)
	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            {{-- untuk menaruh gambar --}}
            </div>

            <div class="col-sm-8">
                <div class = "form-group row">
                    <label for = "nama" class = "col-sm-2 control-label" style="font-weight: 600">Nama</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "nama" value="{{ $p->pegawai_nama }}">
                    </div>
                 </div>

                 <div class = "form-group row">
                    <label for = "jabatan" class = "col-sm-2 control-label" style="font-weight: 600">Jabatan</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "jabatan" value="{{ $p->pegawai_jabatan }}">
                    </div>
                 </div>

                <div class = "form-group row">
                   <label for = "umur" class = "col-sm-2 control-label" style="font-weight: 600">Umur</label>
                   <div class = "col-sm-10">
                      <input type = "text" readonly class = "form-control" id = "umur" value="{{ $p->pegawai_umur }}">
                   </div>
                </div>

                <div class = "form-group row">
                    <label for = "alamat" class = "col-sm-2 control-label" style="font-weight: 600">Alamat</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "alamat" value="{{ $p->pegawai_alamat }}">
                    </div>
                 </div>

                 <div class = "col-sm-2 align-items-center mx-auto">
                       <a href='/pegawai' class = "btn btn-primary btn-block">Ok</a>
                </div>
            </div>
        </div>
	</form>
    @endforeach
@endsection
