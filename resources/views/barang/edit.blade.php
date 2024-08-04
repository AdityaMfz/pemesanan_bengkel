@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Edit Barang</h2>
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

<form action="{{ route('barang.update', $barang->id_barang) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" id="nama_barang" placeholder="Masukkan Nama Barang">
    </div>
    <div class="form-group">
        <label for="merek">Merek:</label>
        <input type="text" name="merek" value="{{ $barang->merek }}" class="form-control" id="merek" placeholder="Masukkan Merek">
    </div>
    <div class="form-group">
        <label for="harga">Harga:</label>
        <input type="number" name="harga" value="{{ $barang->harga }}" class="form-control" id="harga" placeholder="Masukkan Harga">
    </div>
    <div class="form-group">
        <label for="stok">Stok:</label>
        <input type="number" name="stok" value="{{ $barang->stok }}" class="form-control" id="stok" placeholder="Masukkan Stok">
    </div>
    <div class="form-group">
        <label for="satuan">Satuan:</label>
        <select name="satuan" class="form-control" id="satuan">
            <option value="buah">Buah</option>
            <option value="botol">Botol</option>
            <option value="tube">Tube</option>
            <option value="lembar">Lembar</option>
        </select>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
