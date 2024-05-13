<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class PenjualController extends Controller
{
    public function penjual()
    {
        return view('penjual/welcome2');
    }
    public function produk()
    {
        $produks = Produk::all();
        return view('Penjual.Produk', compact('produks'));
    
    }
    public function profile()
    {
        return view('penjual/profile');
    }
    public function pesanan()
    {
        return view('penjual/pesanan');
    }
    public function ulasan()
    {
        return view('penjual/ulasan');
    }

    public function index(){
        {
            $produks = Produk::all();
            return view('Layouts.shop_detail', compact('produks'));
        }
    }
}
