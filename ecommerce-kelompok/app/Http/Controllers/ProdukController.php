<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
// panggil model produk


class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data dari database
        $produk = Produk::join('kategori', 'produk.kategori_id', '=', 'kategori.id')

        //tampilan data
        ->select('produk.*', 'kategori.nama as nama_kategori')
        ->get();

        // kirim data ke view
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = KategoriProduk::all();
        $produk = Produk::all();

        // kirim data ke view form create
        return view('admin.produk.create', compact('kategori','produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // membuat tambah data / validasi data
        $produk = new Produk;

        // kolom kode kita isi dengan input user kode
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->kategori_id = $request->kategori_id;

        // simpen data nya
        $produk->save();

        // tampilin view produk
        return redirect('produk');
    }


    /**
     * Display the specified resource.
     */
    public function edit(string $id)
    {
        //arahkan ke halaman edit
        $kategori = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();
        return view('admin.produk.edit', compact(
            'produk',
            'kategori'
        ));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // fitur edit data/validasi edit data
        $produk = Produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->stok = $request->stok;
        $produk->kategori_id = $request->kategori_id;

        // simpen data nya
        $produk->save();

        // tampilin view produk
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // fitur hapus data
        $produk = Produk::find($id);
        $produk->delete();

        // balikin ke halaman produk
        return redirect('produk')->with('success', 'Produk berhasil dihapus');
    }
}
