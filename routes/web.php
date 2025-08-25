<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PagesController;
use TCG\Voyager\Facades\Voyager;

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
// ====== WELCOME PAGE ======
Route::get('/', WelcomeController::class)->name('page');

// Berita Routes
Route::get('/berita', [WelcomeController::class, 'berita'])->name('berita');
Route::get('/berita/search', [WelcomeController::class, 'beritaSearch'])->name('berita.search');
Route::get('/berita/{slug}', [WelcomeController::class, 'beritaDetail'])->name('berita.show');

// Pengumuman Routes
Route::get('/pengumuman', [WelcomeController::class, 'pengumuman'])->name('pengumuman');
Route::get('/pengumuman/search', [WelcomeController::class, 'pengumumanSearch'])->name('pengumuman.search');
Route::get('/pengumuman/{slug}', [WelcomeController::class, 'pengumumanDetail'])->name('pengumuman.show');

// Produk Routes
//Route::get('/produk', [WelcomeController::class, 'produk'])->name('produk');
//Route::get('/produk/search', [WelcomeController::class, 'produkSearch'])->name('produk.search');
Route::get('/produk/{slug}', [WelcomeController::class, 'produkDetail'])->name('produk.show');

// Galeri Routes
Route::get('/galeri', [WelcomeController::class, 'galeri'])->name('galeri');
// Route::get('/galeri/search', [WelcomeController::class, 'galeriSearch'])->name('galeri.search');
// Route::get('/galeri/{slug}', [WelcomeController::class, 'galeriDetail'])->name('galeri.show');

// Pages Routes
Route::get('pages/{slug}', [PagesController::class, 'show'])->name('pages');
// Route::get('/pages/agenda', [PagesController::class, 'agenda'])->name('agenda');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
