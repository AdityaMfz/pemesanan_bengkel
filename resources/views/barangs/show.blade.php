{{-- resources/views/barangs/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="display-8 font-weight-bold">Detail Barang</h3></div>
                <div class="card-body">
                    <h5 class="card-title">{{ $barang->nama_barang }}</h5>
                    <p class="card-text">ID Barang: {{ $barang->id_barang }}</p>
                    <p class="card-text">Merek: {{ $barang->merek }}</p>
                    <p class="card-text">Harga: {{ $barang->harga }}</p>
                    <p class="card-text">Stok: {{ $barang->stok }}</p>
                    <p class="card-text">Satuan: {{ $barang->satuan }}</p>
                    <a href="{{ route('barangs.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
