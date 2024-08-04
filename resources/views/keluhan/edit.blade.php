@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Daftar Keluhan</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('keluhan.update', $keluhan->id_keluhan) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="nama_keluhan">Nama Keluhan:</label>
                            <input type="text" class="form-control" id="nama_keluhan" name="nama_keluhan" value="{{ $keluhan->nama_keluhan }}" required>
                        </div>

                        <div class="form-group">
                            <label for="ongkos">Ongkos:</label>
                            <textarea class="form-control" id="ongkos" name="ongkos" required>{{ $keluhan->ongkos }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="no_polisi">Pilih No. Polisi:</label>
                            <select class="form-control" id="no_polisi" name="no_polisi" required>
                                <option value="">Pilih No. Polisi</option>
                                @foreach ($kendaraans as $kendar)
                                    <option value="{{ $kendar->no_polisi }}" {{ $keluhan->no_polisi == $kendar->no_polisi ? 'selected' : '' }}>{{ $kendar->no_polisi }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_customer">Pilih Customer:</label>
                            <select class="form-control" id="id_customer" name="id_customer" required>
                                <option value="">Pilih Customer</option>
                                @foreach ($customers as $cus)
                                    <option value="{{ $cus->id_customer }}" {{ $keluhan->id_customer == $cus->id_customer ? 'selected' : '' }}>{{ $cus->nama_customer }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="id_pegawai">Pilih Pegawai:</label>
                            <select class="form-control" id="id_pegawai" name="id_pegawai" required>
                                <option value="">Pilih Pegawai</option>
                                @foreach ($pegawais as $peg)
                                    <option value="{{ $peg->id_pegawai }}" {{ $keluhan->id_pegawai == $peg->id_pegawai ? 'selected' : '' }}>{{ $peg->nama_pegawai }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
