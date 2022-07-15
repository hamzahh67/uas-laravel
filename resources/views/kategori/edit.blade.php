@extends('layouts.app')

@section('content')
    <div class="container">
<a class="btn btn-danger btn-sm float-end" href="{{ url('home') }}">Kembali</a>
        <h3>Edit Data Kategori</h3>
        <form action="{{ url('/kategori/' . $row->kat_id) }}" method="POST">
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" class="form-control" name="kat_nama" value="{{ $row->kat_nama }}"></>
            </div>
            <div class="mb-3">
                <label>Keterangan Kategori</label>
                <input type="text" class="form-control" name="kat_keterangan" value="{{ $row->kat_keterangan }}"></>
            </div>
            <div class="mb-3">
                <input type="submit" value="UPDATE">
            </div>
        </form>
    </div>
@endsection
