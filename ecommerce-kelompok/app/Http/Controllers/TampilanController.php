<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $produk = Produk::all();
        // $kategori = KategoriProduk::select('kategori_produk.nama')
        // ->get();
        // return view('tampilan', ['produk'=>$produk, 'kategori_produk'=>$kategori], compact('produk'));

        // $produk = Produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
        // ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        // ->get();

        // return view('tampilan', ['produk'=>$produk], compact('produk'));

        return view('tampilan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
