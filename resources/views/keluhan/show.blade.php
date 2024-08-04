@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Detail keluhan</h2>
        <a class="btn btn-primary float-right" href="{{ route('keluhan.index') }}"> Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <strong>Keluhan</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>Keluhan:</strong>
            {{ $keluhan->nama_keluhan }}
        </div>
        <div class="form-group">
            <strong>Ongkos:</strong>
            {{ $keluhan->ongkos }}
        </div>
        <div class="form-group">
            <strong>No HP:</strong>
            {{ $keluhan->kendaraan->no_polisi }}
        </div>
        <div class="form-group">
            <strong>Nama Customer:</strong>
            {{ $keluhan->customer->nama_customer }}
        </div>
        <div class="form-group">
            <strong>Nama Pegawai:</strong>
            {{ $keluhan->pegawai->nama_pegawai }}
        </div>
        <div class="form-group">
            <strong>Dibuat Pada:</strong>
            {{ $keluhan->created_at }}
        </div>
        <div class="form-group">
            <strong>Diupdate Pada:</strong>
            {{ $keluhan->updated_at }}
        </div>



    </div>
</div>
</div>
@endsection
