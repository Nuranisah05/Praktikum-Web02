<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Hubungi dengan tabel produk
    protected $table = 'produk';

    // matiin fitur timestamps
    public $timestamps = false;

    // Tentuin kolom-kolom yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga_jual',
        'stok',
        'kategori_id',
    ];

    //buat fungsi kasih relasi ke kategoriproduk
    public function kategori_produk(){
        return $this->belongsTo(KategoriProduk::class);
    }
}
