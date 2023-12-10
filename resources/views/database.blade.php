@extends('master')

@section('Title', 'Data Nilai Mahasiswa')

@section('konten')
	<h2>Sistem Informasi ITS 2023</h2>
	<h3>Data Nilai Mahasiswa P.WEB B</h3>

	<a href="/mahasiswa/tambahnilai" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>
    <p>Cari Nilai Mahasiswa :</p>
	<form action="/mahasiswa/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan NRP Mahasiswa"
        value="{{ old("cari", isset($cari) ? $cari : '') }}" >
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
			{{-- <th>Opsi</th> --}}
		</tr>
		@forelse($nilaikuliah as $m)
		<tr>
			<td>{{ $m->ID }}</td>
			<td>{{ $m->NRP }}</td>
			<td>{{ $m->NilaiAngka }}</td>
			<td>{{ $m->SKS }}</td>
            @if ($m->NilaiAngka <= 40)
                <td>D</td>
                @elseif ($m->NilaiAngka <= 60)
                <td>C</td>
                @elseif ($m->NilaiAngka <= 80)
                <td>B</td>
            @else
                <td>A</td>
            @endif

            <td>{{ $m->NilaiAngka * $m->SKS }}</td>

			{{-- <td>
             <a href="/mahasiswa/view/{{ $m->mahasiswa_id }}" class="btn btn-success">View</a>
				|
				<a href="/mahasiswa/edit/{{ $m->mahasiswa_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mahasiswa/hapus/{{ $m->mahasiswa_id }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
        @empty
        <tr>
            <td colspan="5">Pencarian tidak ditemukan, mohon lakukan pencarian ulang sesuai NRP yang telah terdaftar.</td>
        </tr>
    @endforelse
	</table>
@endsection

