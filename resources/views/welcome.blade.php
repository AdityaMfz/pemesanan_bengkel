<!DOCTYPE html>
<html lang="en">

                    <div class="table-responsive">
                        
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Merek</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Satuan</th>
                                <th width="280px">Aksi</th>
                            </tr>
                        @foreach ($barang as $index => $b)
                            <tr>
                                <td>{{ ($barang->currentPage() - 1) * $barang->perPage() + $loop->index + 1 }}</td>
                                <td>{{ $b->nama_barang }}</td>
                                <td>{{ $b->merek }}</td>
                                <td>{{ $b->harga }}</td>
                                <td>{{ $b->stok }}</td>
                                <td>{{ $b->satuan }}</td>
                                <td>
                                    <a class="btn btn-primary" href="#" data-bs-toggle="modal" data-bs-target="#editBarangModal{{ $b->id_barang }}"><i class="fas fa-user-edit"></i></a>
                                    <form action="{{ route('barang.destroy', $b->id_barang) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                            </tr>
                            
                            @endforeach
                        </table>
                         {!! $barang->links() !!}
                        
                    </div>
                </div>
            </div>  
            </div>        
        </div>            
    </div>
    

    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

</body>

</html>    

