<!DOCTYPE html>
<html>
<head>
    @extends('master')

    @section('Title', 'Data Sandal Nischaverta')

    @section('konten')
        <h3>Edit Data Sandal</h3>
        <button onclick="window.location.href='/sandal'" class="btn btn-warning">Kembali</button>
        <br/>
        <br/>

	@foreach($sandal as $s)
	<form action="/sandal/update" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            {{-- untuk menaruh gambar --}}
            </div>

        <input type="hidden" name="KodeSandal" value="{{ $s->KodeSandal }}">

        <div class="col-sm-8">
            <div class = "form-group row">
                <label for = "KodeSandal" class = "col-sm-2 control-label" style="font-weight: 600">Kode Sandal</label>
                <div class = "col-sm-10">
                    <input type="text" class="form-control" required="required" name="KodeSandal" value="{{ $s->KodeSandal }}">
                </div>
             </div>
             <br>

             <div class = "form-group row">
                <label for = "MerkSandal" class = "col-sm-2 control-label" style="font-weight: 600">Merk Sandal</label>
                <div class = "col-sm-10">
            <input type="text" class="form-control" required="required" name="MerkSandal" value="{{ $s->MerkSandal }}">
            </div>
        <br> <br> <br>
        </div>
        <div class = "form-group row">
            <label for = "StockSandal" class = "col-sm-2 control-label" style="font-weight: 600">Stock Sandal</label>
            <div class = "col-sm-10">
            <input type="number" class="form-control" required="required" name="StockSandal" value="{{ $s->StockSandal }}">
            </div>
        </div>
        <br>
        <br>
        <input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection

	@endforeach

</body>
</html>
