@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Tambah Customer Baru</h2>
        <a class="btn btn-primary float-right" href="{{ route('customer.index') }}"> Back</a>
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

<form action="{{ route('customer.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama_customer">Nama Customer:</label>
        <input type="text" name="nama_customer" class="form-control" id="nama_customer" placeholder="Masukkan Nama Customer">
    </div>
    <div class="form-group">
        <label for="merek">Alamat:</label>
        <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="form-group">
        <label for="harga">Jenis Kelamin:</label>
        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            @foreach (App\Models\Customer::$jenisKelamin as $kelamin => $value)
                <option value="{{ $kelamin }}">{{ $value }}</option>
            @endforeach
        </select>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
