@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Keranjang
        <a class="btn btn-primary btn-sm float-end" href="{{ url('keranjang/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID PRODUK</th>
            <th>HARGA</th>
            <th>JUMLAH</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->ker_id }}</td>
        <td>{{ $row->ker_id_produk }}</td>
        <td>{{ $row->ker_harga }}</td>
        <td>{{ $row->ker_jml }}</td>
        <td><a href="{{ url('keranjang/' . $row->ker_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('keranjang/' . $row->ker_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection