<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama_produk' => 'Produk 1',
            'harga' => 50000,
            'stok' => 10,
            'gambar_produk' => 'cloth_1.jpg'
        ]);

        Produk::create([
            'nama_produk' => 'Produk 2',
            'harga' => 75000,
            'stok' => 15,
            'gambar_produk' => 'cloth_2.jpg'
        ]);

        Produk::create([
            'nama_produk' => 'Produk 3',
            'harga' => 100000,
            'stok' => 20,
            'gambar_produk' => 'cloth_3.jpg'
        ]);
    }
}