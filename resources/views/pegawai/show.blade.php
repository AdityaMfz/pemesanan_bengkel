@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Detail Pegawai</h2>
        <a class="btn btn-primary float-right" href="{{ route('pegawai.index') }}"> Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <strong>Pegawai</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Nama Pegawai:</strong>
            {{ $pegawai->nama_pegawai }}
        </div>
        <div class="form-group">
            <strong>Alamat:</strong>
            {{ $pegawai->alamat }}
        </div>
        <div class="form-group">
            <strong>Jenis Kelamin :</strong>
            {{ $pegawai->jenis_kelamin }}
        </div>
        <div class="form-group">
            <strong>Jabatan :</strong>
            {{ $pegawai->jabatan }}
        </div>
        <div class="form-group">
            <strong>Status :</strong>
            {{ $pegawai->status }}
        </div>
        <div class="form-group">
            <strong>Dibuat Pada:</strong>
            {{ $pegawai->created_at }}
        </div>
        <div class="form-group">
            <strong>Diupdate Pada:</strong>
            {{ $pegawai->updated_at }}
        </div>
    </div>
</div>    
</div>
@endsection
