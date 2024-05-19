{{-- resources/views/barangs/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Tabel Daftar Barang Pemesanan Bengkel</h1>
    <a href="{{ route('barangs.create') }}" class="btn btn-primary mb-4">Tambah Barang</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" style="background: linear-gradient(90deg, #add8e6 0%, #ffffff 100%);">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Merek</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($barangs as $barang)
                <tr>
                    <td>{{ $barang->id_barang }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ $barang->merek }}</td>
                    <td>{{ $barang->harga }}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->satuan }}</td>
                    <td>
                        <div class="d-flex">
                            <a href="{{ route('barangs.edit', $barang->id_barang) }}" class="btn btn-warning btn-sm mr-2">Edit</a>
                            <a href="{{ route('barangs.show', $barang->id_barang) }}" class="btn btn-info btn-sm mr-2">Show</a>
                            <form action="{{ route('barangs.destroy', $barang->id_barang) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus item ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
