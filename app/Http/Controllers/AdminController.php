<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

    public function persetujuan()
    {
        return view('admin.persetujuan');
    }

    public function pembeli()
    {
        return view('admin.pembeli');
    }

    
    public function akun_penjual()
    {
        return view('admin.penjual');
    }

    public function penjual()
    {
        return view('penjual.welcome2');
    }
}
