<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;

    // tabel
    protected $table = 'kategori';

    // bikin kolom yang bisa diisi
    protected $fillable = [
        'nama',
    ];
    // bikin fungsi produk untuk relasi has many

}
