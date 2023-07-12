<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\TampilanController;
use App\Models\KategoriProduk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);




// Buat route untuk frontend index
Route::get('/index', [FrontendController::class, 'index']);
// Buat route untuk frontend about
Route::get('/about', [FrontendController::class, 'about']);
// Buat route untuk frontend choose
Route::get('/choose', [FrontendController::class, 'choose']);
// Buat route untuk frontend contact
Route::get('/contact', [FrontendController::class, 'contact']);
// Buat route untuk frontend services
Route::get('/services', [FrontendController::class, 'services']);
// Buat route untuk frontend team
Route::get('/team', [FrontendController::class, 'team']);


Route::group(['middleware' => ['auth']], function () {

    // bikin route group baru berdasarkan role : admin dan manager
    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {
        // pindahin url yang bisa diakses hanya oleh admin


        // Bikin route untuk dashboard pake controller
        Route::get('/dashboard', [DashboardController::class, 'index']);
        // Bikin route untuk produk
        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        // Bikin route untuk kategori
        Route::get('/kategori', [KategoriProdukController::class, 'index'])->name('kategori');
        // Bikin route untuk about
        Route::get('/about', [TampilanController::class, 'about']);
        // Bikin route untuk contact
        Route::get('/contact', [TampilanController::class, 'contact']);

        // Bikin route untuk product
        Route::get('/product', [ProductController::class, 'index']);
        // Bikin route untuk product sport
        Route::get('/sport', [ProductController::class, 'sport']);
        // Bikin route untuk product work
        Route::get('/work', [ProductController::class, 'work']);
        // Bikin route untuk product casual
        Route::get('/casual', [ProductController::class, 'casual']);
        // Bikin route untuk product heels
        Route::get('/heels', [ProductController::class, 'heels']);

        // bikin routing crud
        Route::get('/produk/create', [ProdukController::class, 'create']);
        // bikin routing untuk kirim data menggunakan store
        Route::post('/produk/store', [ProdukController::class, 'store']);
        // bikin routing edit
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        // bikin routing untuk edit data menggunakan update
        Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
        // bikin routing untuk delet data data menggunakan destroy
        Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    });

    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });
});









Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
