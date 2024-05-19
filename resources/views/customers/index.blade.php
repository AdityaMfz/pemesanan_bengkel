{{-- resources/views/customers/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Customer Bengkel')

@section('content')
<div class="container">
    <h1 class="mt-5 mb-4 text-center">Tabel Daftar Customer Bengkel</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-4">Tambah Customer Baru</a>
    <div class="table-responsive">
        <table class="table table-bordered table-striped" style="background: linear-gradient(90deg, #add8e6 0%, #ffffff 100%);">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nama Customer</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th> <!-- Menambahkan kolom Aksi -->
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id_customer }}</td>
                    <td>{{ $customer->nama_customer }}</td>
                    <td>{{ $customer->alamat }}</td>
                    <td>{{ $customer->jenis_kelamin }}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <a href="{{ route('customers.edit', $customer->id_customer) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id_customer) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="{{ route('customers.show', $customer->id_customer) }}" class="btn btn-info">Lihat</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
