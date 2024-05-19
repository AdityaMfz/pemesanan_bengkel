{{-- resources/views/suppliers/show.blade.php --}}
@extends('layouts.app')

@section('title', 'Detail Supplier')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="display-8 font-weight-bold">Detail Supplier</h3></div>
                <div class="card-body">
                    <h5 class="card-title">Nama Supplier: {{ $supplier->nama_supplier }}</h5>
                    <p class="card-text">ID Supplier: {{ $supplier->id_supplier }}</p>
                    <p class="card-text">Alamat: {{ $supplier->alamat }}</p>
                    <p class="card-text">No HP: {{ $supplier->no_hp }}</p>
                    <a href="{{ route('suppliers.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
