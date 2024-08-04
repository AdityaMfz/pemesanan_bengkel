<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        $barang = Barang::query();

    if (!empty($query)) {
        $barang->where(function($q) use ($query) {
            $q->where('nama_barang', 'like', '%' . $query . '%')
              ->orWhere('merek', 'like', '%' . $query . '%')
              ->orWhere('harga', 'like', '%' . $query . '%')
              ->orWhere('stok', 'like', '%' . $query . '%')
              ->orWhere('satuan', 'like', '%' . $query . '%')
              ;
        });
    }

    $barang = $barang->orderBy('id_barang')->paginate(10);
    return view('barang.index', compact('barang'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merek' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|in:buah,botol,tube,lembar',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
                        ->with('success', 'Barang berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_barang' => 'required',
            'merek' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|string',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')
                        ->with('success', 'Barang berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return redirect()->route('barang.index')
                        ->with('success', 'Barang berhasil dihapus.');
    }
}
