<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $keluhan = Keluhan::with(['kendaraan', 'customer', 'pegawai'])
                ->when($search, function ($query, $search) {
                    return $query->where('nama_keluhan', 'like', "%{$search}%")
                                 ->orWhere('ongkos', 'like', "%{$search}%")
                                 ->orWhereHas('kendaraan', function($q) use ($search) {
                                     $q->where('no_polisi', 'like', "%{$search}%");
                                 })
                                 ->orWhereHas('customer', function($q) use ($search) {
                                     $q->where('nama_customer', 'like', "%{$search}%");
                                 })
                                 ->orWhereHas('pegawai', function($q) use ($search) {
                                     $q->where('nama_pegawai', 'like', "%{$search}%");
                                 });
                })
                ->paginate(10);
                $kendaraans = Kendaraan::all();
                $customers = Customer::all();
                $pegawais = Pegawai::all();
                
            

    return view('keluhan.index', compact('keluhan','kendaraans','customers','pegawais'))
           ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraans = Kendaraan::all(); 
        $customers = Customer::all();
        $pegawais = Pegawai::where('jabatan', 'teknisi')->where('status', 'aktif')->get();

    return view('keluhan.create', compact('kendaraans', 'customers', 'pegawais'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required',
            'ongkos' => 'required',
            'no_polisi' => 'required|exists:kendaraan,no_polisi',
            'id_customer' => 'required|exists:customer,id_customer',
            'id_pegawai' => 'required|exists:pegawai,id_pegawai'
        ]);
    
        // Simpan data ke database
        Keluhan::create($request->all());
    
        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('keluhan.index')
                         ->with('success', 'Keluhan berhasil ditambahkan.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $keluhan = Keluhan::with('kendaraan','customer','pegawai')->findOrFail($id);

        // Mengembalikan view show.blade.php dengan data supplier
        return view('keluhan.show', compact('keluhan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $kendaraans = Kendaraan::all();
        $customers = Customer::all();
        $pegawais = Pegawai::where('jabatan', 'teknisi')->where('status', 'aktif')->get();

        return view('keluhan.edit', compact('keluhan', 'kendaraans', 'customers', 'pegawais'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_keluhan' => 'required|string|max:255',
            'ongkos' => 'required|integer',
            'no_polisi' => 'required|string|max:255',
            'id_customer' => 'required|exists:customer,id_customer',
            'id_pegawai' => 'required|exists:pegawai,id_pegawai'
        ]);
    
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update([
            'nama_keluhan' => $request->nama_keluhan,
            'ongkos' => $request->ongkos,
            'no_polisi' => $request->no_polisi,
            'id_customer' => $request->id_customer,
            'id_pegawai' => $request->id_pegawai
        ]);
    
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $keluhan = Keluhan::findOrFail($id);
        $keluhan->delete();

        return redirect()->route('keluhan.index')
                        ->with('success', 'Daftar keluhan berhasil dihapus.');
    }
}
