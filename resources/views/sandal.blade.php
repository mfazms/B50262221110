@extends('master')

@section('Title', 'Data Sandal Nischaverta')

@section('konten')
	<h2>Sandal Nischaverta</h2>
	<h3>List Stock Sandal Nischaverta</h3>

	<a href="/sandal/sandaltambah" class="btn btn-primary"> + Tambah sandal Baru</a>

	<br/>
    <p>Cari Data sandal :</p>
	<form action="/sandal/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan Kode Sandal"
        value="{{ old("cari", isset($cari) ? $cari : '') }}" >
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Sandal</th>
			<th>Merk Sandal</th>
			<th>Stock Sandal</th>
			<th>Ketersediaan Sandal</th>
			<th>Opsi</th>
		</tr>
		@forelse($sandal as $s)
		<tr>
			<td>{{ $s->KodeSandal }}</td>
			<td>{{ $s->MerkSandal }}</td>
			<td>{{ $s->StockSandal }}</td>
			<td>
                @if ($s->KetersediaanSandal == 0) x
                @elseif ($s->KetersediaanSandal == 1) y
                @endif
			<td>
                <a href="/sandal/sandalview/{{ $s->KodeSandal }}" class="btn btn-success">View</a>
				|
				<a href="/sandal/sandaledit/{{ $s->KodeSandal }}" class="btn btn-warning">Edit</a>
				|
				<a href="/sandal/hapus/{{ $s->KodeSandal }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
        @empty
        <tr>
            <td colspan="5">Pencarian tidak ditemukan, mohon lakukan pencarian ulang sesuai Kode Sandal yang telah terdaftar.</td>
        </tr>
    @endforelse
	</table>
@endsection

