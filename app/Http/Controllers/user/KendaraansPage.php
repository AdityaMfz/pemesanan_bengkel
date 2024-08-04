<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraansPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::paginate(10); // Adjust this as needed for fetching your data

        return view('user.kendaraans', compact('kendaraan'));
    }
}