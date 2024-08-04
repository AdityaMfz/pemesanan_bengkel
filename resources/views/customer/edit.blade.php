@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Edit Customer</h2>
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

<form action="{{ route('customer.update', $customer->id_customer) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_customer">Nama Customer:</label>
        <input type="text" name="nama_customer" value="{{ $customer->nama_customer }}" class="form-control" id="nama_customer" placeholder="Masukkan Nama Customer">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $customer->alamat }}" class="form-control" id="alamat" placeholder="Masukkan Alamat">
    </div>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="form-control">
            @foreach(App\Models\Customer::$jenisKelamin as $kelamin => $value)
                <option value="{{ $kelamin }}" {{ $customer->jenis_kelamin == $kelamin ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
