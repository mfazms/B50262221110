@extends('master')

@section('title', 'Keranjang Belanja')

@section('konten')
<br><br>
    <h3>Keranjang Belanja</h3>
    <a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli Barang</a>

    <br/>
    <p>Cari Data Barang :</p>
	<form action="/keranjangbelanja/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari berdasarkan Kode Barang"
        value="{{ old("cari", isset($cari) ? $cari : '') }}" >
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

    <br><br>
    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @forelse ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->ID}}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
                <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Pencarian tidak ditemukan, mohon lakukan pencarian ulang sesuai Kode Sandal yang telah terdaftar.</td>
            </tr>
        @endforelse

    </table>

@endsection
