@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Supplier</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('supplier.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nama_supplier">Nama Supplier:</label>
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" required>
                        </div>

                        <div class="form-group">
                            <label for="alamat">Alamat:</label>
                            <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                        </div>

                        <div class="form-group">
                            <label for="no_hp">No. HP:</label>
                            <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                        </div>

                        <div class="form-group">
                            <label for="id_barang">Pilih Barang:</label>
                            <select class="form-control" id="id_barang" name="id_barang" required>
                                <option value="">Pilih Barang</option>
                                @foreach ($barangs as $barang)
                                    <option value="{{ $barang->id_barang }}">{{ $barang->nama_barang }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
