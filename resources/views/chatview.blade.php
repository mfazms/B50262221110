@extends('master')

@section('Title', 'CHAT ')

@section('konten')
    <h1>SISTEM INFORMASI MESSANGER</h1>
    <h3>EAS Kode Soal AA</h3>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Pesan</th>
        </tr>
        @forelse($chat as $c)
        <tr>
            <td>{{ $c->id }}</td>
            <td>
                {!! convertEmoticonToImage($c->pesan) !!}
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="2">Tidak ada pesan.</td>
        </tr>
        @endforelse
    </table>
@endsection
