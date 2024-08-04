<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = $request->input('search');
    $kendaraan = Kendaraan::query();

    if (!empty($query)) {
        $kendaraan->where(function($q) use ($query) {
            $q->where('no_polisi', 'like', '%' . $query . '%')
              ->orWhere('no_mesin', 'like', '%' . $query . '%')
              ->orWhere('merek', 'like', '%' . $query . '%')
              ->orWhere('warna', 'like', '%' . $query . '%')
              ->orWhere('lain_merek', 'like', '%' . $query . '%')
              ->orWhere('lain_warna', 'like', '%' . $query . '%');
        });
    }

    $kendaraan = $kendaraan->orderBy('no_polisi')->paginate(10);

    return view('kendaraan.index', compact('kendaraan'));
}
    
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'no_polisi' => 'required',
            'no_mesin' => 'required',
            'merek' => 'required',
            'warna' => 'required',
        ]);

        
    
        $kendaraan = new Kendaraan();
        $kendaraan->no_polisi = $request->no_polisi;
        $kendaraan->no_mesin = $request->no_mesin;
    
        // Simpan merek dan warna
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;
    
        // Simpan nilai lain jika merek atau warna adalah 'Lain'
        if ($request->merek == 'Lain') {
            $kendaraan->lain_merek = $request->lain_merek;
        }
    
        if ($request->warna == 'Lain') {
            $kendaraan->lain_warna = $request->lain_warna;
        }
    
        $kendaraan->save();
    
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan created successfully.');
    }
    /**
     * Display the specified resource.
     */
    public function show($no_polisi)
{
    $kendaraan = Kendaraan::where('no_polisi', $no_polisi)->firstOrFail();
    return view('kendaraan.show', compact('kendaraan'));
}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($no_polisi)
    {
        $kendaraan = Kendaraan::where('no_polisi', $no_polisi)->firstOrFail();
        return view('kendaraan.edit', compact('kendaraan'));
    }

    public function update(Request $request, $no_polisi)
    {
        $request->validate([
            'no_polisi' => 'required',
            'no_mesin' => 'required',
            'merek' => 'required',
            'warna' => 'required',
        ]);

        $kendaraan = Kendaraan::where('no_polisi', $no_polisi)->firstOrFail();
        $kendaraan->no_polisi = $request->no_polisi;
        $kendaraan->no_mesin = $request->no_mesin;
        $kendaraan->merek = $request->merek;
        $kendaraan->warna = $request->warna;

        if ($request->merek == 'Lain') {
            $kendaraan->lain_merek = $request->lain_merek;
        } else {
            $kendaraan->lain_merek = null;
        }

        if ($request->warna == 'Lain') {
            $kendaraan->lain_warna = $request->lain_warna;
        } else {
            $kendaraan->lain_warna = null;
        }

        $kendaraan->save();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan updated successfully.');
    }

    public function destroy($no_polisi)
    {
        $kendaraan = Kendaraan::where('no_polisi', $no_polisi)->firstOrFail();
        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan deleted successfully.');
    }
}
