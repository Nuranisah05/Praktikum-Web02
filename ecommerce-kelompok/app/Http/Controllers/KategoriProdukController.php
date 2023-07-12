<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;

class KategoriProdukController extends Controller
{
    public function index()
    {
        // ambil data dari database
        $kategori = KategoriProduk::select('kategori.nama')
        ->get();

        // kirim data ke view
        return view('admin.produk.kategori', compact('kategori'));
    }
}
