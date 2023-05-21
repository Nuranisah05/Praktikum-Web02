<?php

use App\Http\Controllers\FormController;
use App\Http\Controllers\SkillController;
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

Route::get('/', function () {
    return view('welcome');
});


// Buat Route salam
Route::get('/salam', function () {
    return "Selamat datang";
});

//Buat Route Salam
Route::get('/kabar', function () {
    return view('kondisi');
});

//Buat Route Nilai
Route::get('/nilai', function () {
    return view('nilai');
});

//Buat Rounte Pasien
Route::get('/pasien', function () {
    return view('pasien');
});

// Buat Route Form
Route::get('/form', [FormController::class, 'index']);

// Buat Routw Hasil Form
Route::post('/hasil', [FormController::class, 'hasil']);

// Buat Route  Skill
Route::get('/skill', [SkillController::class, 'index1']);

// Buat Routw Hasil Skill
Route::post('/skillhasil', [SkillController::class, 'skillhasil']);

