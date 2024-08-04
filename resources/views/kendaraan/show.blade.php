@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <div class="col-lg-12">
        <h2 class="float-left">Detail Kendaraan</h2>
        <a class="btn btn-primary float-right" href="{{ route('kendaraan.index') }}"> Kembali</a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <strong>Kendaraan</strong>
    </div>
    <div class="card-body">
        <div class="form-group">
            <strong>No Polisi:</strong>
            {{ $kendaraan->no_polisi }}
        </div>
        <div class="form-group">
            <strong>No Mesin:</strong>
            {{ $kendaraan->no_mesin }}
        </div>
        <div class="form-group">
            <strong>Merek:</strong>
            {{ $kendaraan->merek == 'Lain' ? $kendaraan->lain_merek : $kendaraan->merek }}
        </div>
        <div class="form-group">
            <strong>Warna:</strong>
            {{ $kendaraan->warna == 'Lain' ? $kendaraan->lain_warna : $kendaraan->warna }}
        </div>
        <div class="form-group">
            <strong>Dibuat Pada:</strong>
            {{ $kendaraan->created_at }}
        </div>
        <div class="form-group">
            <strong>Diupdate Pada:</strong>
            {{ $kendaraan->updated_at }}
        </div>
    </div>
</div>
@endsection
