<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\user\KendaraansPage;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\user\BarangsPage;
use App\Http\Controllers\user\CustomersPage;
use App\Http\Controllers\user\KeluhansPage;
use App\Http\Controllers\user\SuppliersPages;

Route::get('/', function () {
    return view('blog.index');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/myprofile', [ProfileController::class, 'show'])->name('profile')->middleware('auth');

Route::get('userbarang', [BarangsPage::class, 'index'])->middleware(['auth', 'verified'])->name('userbarang');
Route::get('usercustomer', [CustomersPage::class, 'index'])->middleware(['auth', 'verified'])->name('usercustomer');
Route::get('userkendaraan', [KendaraansPage::class, 'index'])->middleware(['auth', 'verified'])->name('userkendaraan');
Route::get('usersupplier', [SuppliersPages::class, 'index'])->middleware(['auth', 'verified'])->name('usersupplier');
Route::get('userkeluhan', [KeluhansPage::class, 'index'])->middleware(['auth', 'verified'])->name('userkeluhan');

Route::get('/adminhome', [HomeController::class, 'adminHome'])->middleware(['auth', 'admin'])->name('admin.adminhome');

Route::resource('barang', BarangController::class)->middleware(['auth','admin']);
Route::resource('customer', CustomerController::class)->middleware(['auth','admin']);
Route::resource('keluhan', KeluhanController::class)->middleware(['auth','admin']);
Route::resource('kendaraan', KendaraanController::class)->middleware(['auth','admin']);
Route::resource('pegawai', PegawaiController::class)->middleware(['auth','admin']);
Route::resource('supplier', SupplierController::class)->middleware(['auth','admin']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
