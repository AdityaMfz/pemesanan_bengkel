<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Menampilkan daftar customer
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    // Menampilkan form untuk membuat customer baru
    public function create()
    {
        return view('customers.create');
    }

    // Menyimpan customer baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer berhasil ditambahkan.');
    }

   
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama_customer' => 'required|max:150',
            'alamat' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.index')->with('success', 'Customer berhasil diperbarui.');
    }

  
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Customer berhasil dihapus.');
    }

    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }
}
