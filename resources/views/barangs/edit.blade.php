{{-- resources/views/barangs/edit.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3 class="display-8 font-weight-bold">Edit Barang</h3></div>

                <div class="card-body">
                    <form action="{{ route('barangs.update', $barang->id_barang) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="nama_barang" class="form-label">Nama Barang:</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="{{ $barang->nama_barang }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="merek" class="form-label">Merek:</label>
                            <input type="text" class="form-control" id="merek" name="merek" value="{{ $barang->merek }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga:</label>
                            <input type="number" class="form-control" id="harga" name="harga" value="{{ $barang->harga }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="stok" class="form-label">Stok:</label>
                            <input type="number" class="form-control" id="stok" name="stok" value="{{ $barang->stok }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="satuan" class="form-label">Satuan:</label>
                            <input type="text" class="form-control" id="satuan" name="satuan" value="{{ $barang->satuan }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Barang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
