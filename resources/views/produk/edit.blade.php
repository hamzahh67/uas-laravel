@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Produk</h3>
        <form action="{{ url('/produk/' . $row->produk_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Id Kategori</label>
                <input type="text" class="form-control" name="produk_id_kat" value="{{ $row->produk_id_kat }}"></>
            </div>
            <div class="mb-3">
                <label>Kode Produk</label>
                <input type="text" class="form-control" name="produk_kode" value="{{ $row->produk_kode }}"></>
            </div>
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" class="form-control" name="produk_nama" value="{{ $row->produk_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Harga Produk</label>
                <input type="text" class="form-control" name="produk_hrg" value="{{ $row->produk_hrg }}"></>
            </div>
            <div class="mb-3">
                <label>Photo Produk</label>
                <input type="text" class="form-control" name="produk_photo" value="{{ $row->produk_photo }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
