@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Detail </h2>
        <a class="btn btn-primary float-right" href="{{ route('barang.index') }}"> Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <strong>Barang</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Nama Barang:</strong>
            {{ $barang->nama_barang }}
        </div>
        <div class="form-group">
            <strong>Merek:</strong>
            {{ $barang->merek }}
        </div>
        <div class="form-group">
            <strong>Harga :</strong>
            {{ $barang->harga }}
        </div>
        <div class="form-group">
            <strong>Stok :</strong>
            {{ $barang->stok }}
        </div>
        <div class="form-group">
            <strong>Satuan :</strong>
            {{ $barang->satuan }}
        </div>
        <div class="form-group">
            <strong>Dibuat Pada:</strong>
            {{ $barang->created_at }}
        </div>
        <div class="form-group">
            <strong>Diupdate Pada:</strong>
            {{ $barang->updated_at }}
        </div>
    </div>
</div>    
</div>
@endsection
