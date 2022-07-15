@extends('layouts.app')

@section('content')

<div class = "container">

    <h3> 
        Daftar Produk
        <a class="btn btn-primary btn-sm float-end" href="{{ url('produk/create') }}">Tambah Data</a>
    </h3>

    <table class ="table table-bordered">
        <tr>
            <th>NO</th>
            <th>ID KATEGORI</th>
            <th>KODE</th>
            <th>NAMA</th>
            <th>HARGA</th>
            <th>PHOTO</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($rows as $row)
        <tr>
        <td>{{ $row->produk_id }}</td>
        <td>{{ $row->produk_id_kat }}</td>
        <td>{{ $row->produk_kode }}</td>
        <td>{{ $row->produk_nama }}</td>
        <td>{{ $row->produk_hrg }}</td>
        <td>{{ $row->produk_photo }}</td>
        <td><a href="{{ url('produk/' . $row->produk_id . '/edit') }}">Edit</a></td>
                    <td>
                        <form action="{{ url('produk/' . $row->produk_id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button>Hapus</button>
        </tr>
        @endforeach

    </table>


</div>
@endsection