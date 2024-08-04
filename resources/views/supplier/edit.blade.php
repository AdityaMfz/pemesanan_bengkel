@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Edit Supplier</h2>
        <a class="btn btn-primary float-right" href="{{ route('supplier.index') }}"> Back</a>
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

<form action="{{ route('supplier.update', $supplier->id_supplier) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_supplier">Nama Supplier:</label>
        <input type="text" name="nama_supplier" value="{{ $supplier->nama_supplier }}" class="form-control" id="nama_supplier" placeholder="Masukkan Nama Supplier">
    </div>
    <div class="form-group">
        <label for="Alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $supplier->alamat }}" class="form-control" id="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label for="no_hp">No HP:</label>
        <input type="number" name="no_hp" value="{{ $supplier->no_hp }}" class="form-control" id="harga" placeholder="Masukkan Nomor Ponsel">
    </div>
    <div class="form-group">
        <label for="satuan">Nama Barang:</label>
        <select class="form-control" id="id_barang" name="id_barang" required>
            <option value="">Pilih Barang</option>
            @foreach ($barangs as $barang)
                <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
