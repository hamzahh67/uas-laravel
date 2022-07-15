@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Tambah Data Keranjang</h3>
        <form action="{{ url('/keranjang') }}" method="POST">
            @csrf
            div class="mb-3">
                <label>Id Produk</label>
                <input type="text" class="form-control" name="kat_nama" value="{{ $row->kat_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Harga Keranjang</label>
                <input type="text" class="form-control" name="ker_harga" value="{{ $row->ker_harga }}"></>
            </div>
            <div class="mb-3">
                <label>Jumlah Keranjang</label>
                <input type="text" class="form-control" name="ker_jml" value="{{ $row->ker_jml }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
    </div>
@endsection
