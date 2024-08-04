<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersPages extends Controller
{
    public function index()
    {
        $supplier = Supplier::paginate(10);
        $barangs = Barang::all(); // Adjust this as needed for fetching your data

        return view('user.suppliers', compact('supplier','barangs'));
        
    }
}

