<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth::user()->usertype; // Menggunakan Auth::user() langsung

            if($usertype == 'user')
            {
                return view('dashboard');
            }
            elseif($usertype == 'admin')
            {
                return view('admin.adminhome');
            }
            else
            {
                return redirect()->back();
            }
        }
        else
        {
            return redirect('login'); // Jika pengguna tidak terautentikasi, arahkan ke halaman login
        }
    }
    public function adminHome()
    {
        return view('admin.adminhome');
    }
}
