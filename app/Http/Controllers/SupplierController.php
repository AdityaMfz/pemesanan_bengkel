<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $supplier = Supplier::with(['barang'])
                ->when($search, function ($query, $search) {
                    return $query->where('nama_supplier', 'like', "%{$search}%")
                                 ->orWhere('alamat', 'like', "%{$search}%")
                                 ->orWhere('no_hp','like',"%{$search}%")
                                 ->orWhereHas('barang', function($q) use ($search) {
                                     $q->where('nama_barang', 'like', "%{$search}%");
                                 })
                                 ;
                })
                ->paginate(10);
                $selectedBarangIds = Supplier::pluck('id_barang')->toArray();
                $barangs = Barang::whereNotIn('id_barang', $selectedBarangIds)->get();
    return view('supplier.index', compact('supplier','barangs'))
           ->with('i', (request()->input('page', 1) - 1) * 10);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $selectedBarangIds = Supplier::pluck('id_barang')->toArray();
    
        // Dapatkan daftar barang yang belum dipilih
        $barangs = Barang::whereNotIn('id_barang', $selectedBarangIds)->get();
    
        return view('supplier.create', compact('barangs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'id_barang' => 'required|exists:barang,id_barang' // Pastikan id_barang ada di tabel 'barang'
        ]);

        // Simpan data ke database
        Supplier::create($request->all());

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('supplier.index')
                         ->with('success', 'Supplier berhasil ditambahkan.');
    }

    public function edit(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $barangs = Barang::all();
        return view('supplier.edit', compact('supplier','barangs'),);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_supplier' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required|string',
            
            
        ]);

        $supplier = Supplier::findOrFail($id);
        $supplier->update($request->all());

        return redirect()->route('supplier.index')
                        ->with('success', 'Supplier berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::findOrFail($id);
        $supplier->delete();

        return redirect()->route('supplier.index')
                        ->with('success', 'Barang berhasil dihapus.');
    }
}
