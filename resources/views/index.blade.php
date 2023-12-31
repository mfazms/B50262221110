@extends('master')

@section('Title', 'Data Pegawai')

@section('konten')
	<h2>Pegawai Hackington</h2>
	<h3>Daftar Pegawai</h3>

	<a href="/pegawai/pegawaitambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan nama Pegawai"
        value="{{ old("cari", isset($cari) ? $cari : '') }}" >
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@forelse($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a href="/pegawai/pegawaiview/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
				|
				<a href="/pegawai/pegawaiedit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
        @empty
        <tr>
            <td colspan="5">Pencarian tidak ditemukan, mohon lakukan pencarian ulang sesuai Nama Pegawai yang telah terdaftar.</td>
        </tr>
    @endforelse
	</table>
    {{ $pegawai->links()}}
@endsection

