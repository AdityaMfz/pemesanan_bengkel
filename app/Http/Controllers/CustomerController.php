<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Customer::query();

    // Filter berdasarkan pencarian nama customer atau alamat
    if ($search = $request->input('search')) {
        $query->where(function ($query) use ($search) {
            $query->where('nama_customer', 'LIKE', "%$search%")
                  ->orWhere('alamat', 'LIKE', "%$search%");
        });
    }

    // Filter berdasarkan jenis kelamin
    if ($sort = $request->input('sort')) {
        $query->where('jenis_kelamin', $sort);
    }

    $customers = $query->paginate(10);

    return view('customer.index', compact('customers'))
           ->with('i', (request()->input('page', 1) - 1) * 10);
    }       
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            
        ]);

        Customer::create($request->all());

        return redirect()->route('customer.index')
                        ->with('success', 'Customer berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);

        // Mengembalikan view show.blade.php dengan data supplier
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_customer' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            
        ]);

        $customer = Customer::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('customer.index')
                        ->with('success', 'Customer berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();

        return redirect()->route('customer.index')
                        ->with('success', 'Customer berhasil dihapus.');
    }
}
