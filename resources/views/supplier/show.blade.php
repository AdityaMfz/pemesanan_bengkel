@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Detail Supplier</h2>
        <a class="btn btn-primary float-right" href="{{ route('supplier.index') }}"> Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <strong>Supplier</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Nama Supplier:</strong>
            {{ $supplier->nama_supplier }}
        </div>
        <div class="form-group">
            <strong>Alamat:</strong>
            {{ $supplier->alamat }}
        </div>
        <div class="form-group">
            <strong>No HP:</strong>
            {{ $supplier->no_hp }}
        </div>
    </div>
</div>

<div class="card mt-3">
    <div class="card-header">
        <strong>Barang</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Nama Barang:</strong>
            {{ $supplier->barang->nama_barang }}
        </div>
        <div class="form-group">
            <strong>Merek Barang:</strong>
            {{ $supplier->barang->merek }}
        </div>
        <div class="form-group">
            <strong>Stok :</strong>
            {{ $supplier->barang->stok }}
        </div>

    </div>
</div>
@endsection
