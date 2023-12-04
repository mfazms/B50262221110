<!DOCTYPE html>
<html>
<head>
    @extends('master')

    @section('title','Data Pegawai')

    @section('konten')

        <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
        <h3>Edit Pegawai</h3>

        <button onclick="window.location.href='/pegawai'" class="btn btn-warning">Kembali</button>


        <br/>
        <br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            {{-- untuk menaruh gambar --}}
            </div>

        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class="col-sm-8">
            <div class = "form-group row">
                <label for = "nama" class = "col-sm-2 control-label" style="font-weight: 600">Nama</label>
                <div class = "col-sm-10">
                    <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}">
                </div>
             </div>
             <br>

             <div class = "form-group row">
                <label for = "nama" class = "col-sm-2 control-label" style="font-weight: 600">Jabatan</label>
                <div class = "col-sm-10">
            <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}">
            </div>
        <br> <br> <br>
        </div>
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label" style="font-weight: 600">Umur</label>
            <div class = "col-sm-10">
            <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}">
            </div>
        </div>
        <br>
        <div class = "form-group row">
            <label for = "nama" class = "col-sm-2 control-label" style="font-weight: 600">Alamat</label>
            <div class = "col-sm-10">
            <input type="text" class="form-control" required="required" name="alamat" value="{{ $p->pegawai_alamat }}">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection

	@endforeach

</body>
</html>
