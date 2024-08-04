<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Pegawai::query();

    
    if ($search = $request->input('search')) {
        $query->where(function ($query) use ($search) {
            $query->where('nama_pegawai', 'LIKE', "%$search%")
                  ->orWhere('alamat', 'LIKE', "%$search%")
                  ->orWhere('jabatan', 'LIKE', "%$search%")

                  ;
                  

        });
    }

    // Filter berdasarkan jenis kelamin
    if ($sort = $request->input('sort')) {
        $query->where('status', $sort);
    }

        // Urutkan pegawai berdasarkan status
        $pegawai = $query->orderByRaw("CASE WHEN status = 'aktif' THEN 0 ELSE 1 END ASC")
            ->paginate(10);

        // Mengembalikan view index.blade.php dengan data pegawai
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required'
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')
                        ->with('success', 'Pegawai berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pegawai = Pegawai::find($id);

        // Mengembalikan view show.blade.php dengan data supplier
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_pegawai' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'jabatan' => 'required',
            'status' => 'required'
        ]);

        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')
                        ->with('success', 'Pegawai berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        return redirect()->route('pegawai.index')
                        ->with('success', 'Pegawai berhasil dihapus.');
    }
}
