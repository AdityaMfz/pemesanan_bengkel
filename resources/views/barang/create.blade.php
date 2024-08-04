@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Tambah Barang Baru</h2>
        <a class="btn btn-primary float-right" href="{{ route('barang.index') }}"> Back</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
    </div>
    <div class="form-group">
        <label for="merek">Merek:</label>
        <input type="text" name="merek" class="form-control" id="merek" placeholder="Masukkan Merek">
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" name="harga" class="form-control" id="harga" placeholder="Masukkan Harga">
    </div>
    <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" name="stok" class="form-control" id="stok" placeholder="Masukkan Stok">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan:</label>
        <select name="satuan" class="form-control" id="satuan">
            <option value="buah">Liter</option>
            <option value="botol">Buah</option>
            <option value="tube">Set</option>
            <option value="lembar">Unit</option>
            <option value="lembar">Kg</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
