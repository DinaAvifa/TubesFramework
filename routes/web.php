<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\ProdukController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('detail/{id}', [HomeController::class, 'show'])->name('show');
Route::get('profile', ProfileController::class)->name('profile');
Route::resource('produk', ProdukController::class);
Route::get('company', CompanyProfileController::class)->name('company');
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('download-file/{produkId}', [ProdukController::class, 'downloadFile'])->name('produk.downloadFile');

Route::get('getProduk', [ProdukController::class, 'getData'])->name('produk.getData');

Route::get('exportExcel', [ProdukController::class, 'exportExcel'])->name('produk.exportExcel');

Route::get('exportPdf', [ProdukController::class, 'exportPdf'])->name('produk.exportPdf');