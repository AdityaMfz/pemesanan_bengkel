@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Edit Pegawai</h2>
        <a class="btn btn-primary float-right" href="{{ route('pegawai.index') }}"> Back</a>
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

<form action="{{ route('pegawai.update', $pegawai->id_pegawai) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nama_pegawai">Nama Pegawai:</label>
        <input type="text" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}" class="form-control" id="nama_pegawai" placeholder="Masukkan Nama Pegawai">
    </div>

    <div class="form-group">
        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="{{ $pegawai->alamat }}" class="form-control" id="alamat" placeholder="Masukkan Alamat">
    </div>

    <div class="form-group">
        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" class="form-control">
            @foreach(App\Models\Pegawai::$jenisKelamin as $kelamin => $value)
                <option value="{{ $kelamin }}" {{ $pegawai->jenis_kelamin == $kelamin ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="jabatan">Jabatan:</label>
        <select name="jabatan" class="form-control">
            @foreach(App\Models\Pegawai::$jabatan as $jabat => $value)
                <option value="{{ $jabat }}" {{ $pegawai->jabatan == $jabat ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="status">Status:</label>
        <select name="status" class="form-control">
            @foreach(App\Models\Pegawai::$status as $stats => $value)
                <option value="{{ $stats }}" {{ $pegawai->status == $stats ? 'selected' : '' }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
