<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'produk_id';
    protected $fillable = ['nama_produk', 'harga', 'stok', 'gambar_produk','deskripsi','is_hidden'];
    public $timestamps = true;
}