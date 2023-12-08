@extends('master')
@section('konten')

<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
<h3>List Stock Sandal Nischaverta</h3>

	<button onclick="window.location.href='/sandal'" class="btn btn-warning">Kembali</button>

	<br/>
	<br/>
    @foreach ($sandal as $s)
	<form action="/sandal/store" method="post">
		{{ csrf_field() }}

        <div class="row">
            <div class="col-sm-4 border">
            {{-- untuk menaruh gambar --}}
            </div>

            <div class="col-sm-8">
                <div class = "form-group row">
                    <label for = "KodeSandal" class = "col-sm-2 control-label" style="font-weight: 600">Kode Sandal</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "KodeSandal" value="{{ $s->KodeSandal }}">
                    </div>
                 </div>

                 <div class = "form-group row">
                    <label for = "MerkSandal" class = "col-sm-2 control-label" style="font-weight: 600">Merk Sandal</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "MerkSandal" value="{{ $s->MerkSandal }}">
                    </div>
                 </div>

                <div class = "form-group row">
                   <label for = "StockSandal" class = "col-sm-2 control-label" style="font-weight: 600">Stock Sandal</label>
                   <div class = "col-sm-10">
                      <input type = "text" readonly class = "form-control" id = "StockSandal" value="{{ $s->StockSandal }}">
                   </div>
                </div>

                <div class = "form-group row">
                    <label for = "KetersediaanSandal" class = "col-sm-2 control-label" style="font-weight: 600">Ketersediaan Sandal</label>
                    <div class = "col-sm-10">
                       <input type = "text" readonly class = "form-control" id = "KetersediaanSandal" value="{{ $s->KetersediaanSandal }}">
                    </div>
                 </div>

                 <div class = "col-sm-2 align-items-center mx-auto">
                       <a href='/sandal' class = "btn btn-primary btn-block">Ok</a>
                </div>
            </div>
        </div>
	</form>
    @endforeach
@endsection
