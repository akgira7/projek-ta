<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\VariabelController;
use App\Http\Controllers\FuzzyController;
use App\Http\Controllers\AlternatifController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

//homedasboard
Route::get('/home', [HomeController::class, 'home']);

//variabel
Route::get('/variabel', [VariabelController::class, 'index'])->name('variabel');

Route::get('/tambahvariabel', [VariabelController::class, 'tambahvariabel'])->name('tambahvariabel');
Route::post('/insertvariabel', [VariabelController::class, 'insertvariabel'])->name('insertvariabel');
Route::get('/editvariabel/{id}', [VariabelController::class, 'editvariabel'])->name('editvariabel');
Route::post('/updatevariabel/{id}', [VariabelController::class, 'updatevariabel'])->name('updatevariabel');
Route::get('/deletevariabel/{id}', [VariabelController::class, 'deletevariabel'])->name('deletevariabel');
// Route::get('/tampil-edit-variabel/{id}', [VariabelController::class, 'edit'])->name('variabel.edit');

//himpunanFuzzy
Route::get('/fuzzy', [FuzzyController::class, 'fuzzy']);

//alternatif
//Route::get('/alternatif', [AlternatifController::class, 'alternatif']);
Route::get('/alternatif', [AlternatifController::class, 'index'])->name('alternatif');
Route::get('/tambahalternatif', [AlternatifController::class, 'tambahalternatif'])->name('tambahalternatif');
Route::post('/insertalternatif', [AlternatifController::class, 'insertalternatif'])->name('insertalternatif');
Route::get('/editalternatif/{id}', [AlternatifController::class, 'editalternatif'])->name('editalternatif');
Route::post('/updatealternatif/{id}', [AlternatifController::class, 'updatealternatif'])->name('updatealternatif');
Route::get('/deletealternatif/{id}', [AlternatifController::class, 'deletealternatif'])->name('deletealternatif');
// Route::get('/tampil-edit-alternatif/{id}', [AlternatifController::class, 'edit'])->name('alternatif.edit');

//inputNilai
Route::get('/nilai', [NilaiController::class, 'nilai']);

//perhitungan
Route::get('/perhitungan', [PerhitunganController::class, 'perhitungan']);

//hasilAkhir
Route::get('/hasil', [HasilController::class, 'hasil']);

Route::get('/user', [UserController::class, 'user']);
Route::get('/profile', [ProfileController::class, 'profile']);
Route::get('/login', [LoginController::class, 'login']);
