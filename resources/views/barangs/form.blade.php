{{-- resources/views/barangs/form.blade.php --}}
<form action="{{ $action }}" method="POST">
    @csrf
    @if (Route::currentRouteName() == 'barangs.edit')
    @method('PUT')
    @endif

    <div class="form-group">
        <label>Nama Barang:</label>
        <input type of="text" class="form-control" name="nama_barang" value="{{ $barang->nama_barang ?? '' }}" required>
    </div>
    

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
