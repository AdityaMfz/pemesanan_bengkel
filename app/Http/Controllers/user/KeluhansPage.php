<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhansPage extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluhan = Keluhan::paginate(10);
        $kendaraans = Kendaraan::all();
        $customers = Customer::all();
        $pegawais = Pegawai::all();

        return view('user.keluhans', compact('keluhan','kendaraans','customers','pegawais'));
        
    }

    
}
