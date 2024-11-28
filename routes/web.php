<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PinjamBarangController;
Route::get('/', function () {
   return view('home');
})->name('home');
// Rute untuk menampilkan semua data Supplier
Route::get('/Supplier', [SupplierController::class, 'index'])->name('Supplier.index');
// Rute untuk menampilkan form membuat Supplier baru
Route::get('/Supplier/create', [SupplierController::class, 'create'])->name('Supplier.create');
// Rute untuk menambahkan data Supplier baru
Route::post('/Supplier', [SupplierController::class, 'store'])->name('Supplier.store');
// Route untuk menampilkan form edit
Route::get('/Supplier/{Supplier}', [SupplierController::class, 'edit'])->name('Supplier.edit');
// Route untuk mengupdate data supplier
Route::put('/Supplier/{Supplier}', [SupplierController::class, 'update'])->name('Supplier.update');
// Route untuk menghapus data supplier
Route::delete('/Supplier/{Supplier} ', [SupplierController::class, 'destroy'])->name('Supplier.destroy');

// Rute untuk menampilkan semua data User
Route::get('/User', [UserController::class, 'index'])->name('User.index');
// Rute untuk menampilkan form membuat User baru
Route::get('/User/create', [UserController::class, 'create'])->name('User.create');
// Rute untuk menambahkan data User baru
Route::post('/User', [UserController::class, 'store'])->name('User.store');
// Route untuk menampilkan form edit
Route::get('/User/{User}', [UserController::class, 'edit'])->name('User.edit');
// Route untuk mengupdate data User
Route::put('/User/{User}', [UserController::class, 'update'])->name('User.update');
// Route untuk menghapus data User
Route::delete('/User/{User} ', [UserController::class, 'destroy'])->name('User.destroy');

// Rute untuk menampilkan semua data Stok
Route::get('/Stok', [StokController::class, 'index'])->name('Stok.index');
// Rute untuk menampilkan form membuat Stok baru
Route::get('/Stok/create', [StokController::class, 'create'])->name('Stok.create');
// Rute untuk menambahkan data Stok baru
Route::post('/Stok', [StokController::class, 'store'])->name('Stok.store');
// Route untuk menampilkan form edit
Route::get('/Stok/{Stok}', [StokController::class, 'edit'])->name('Stok.edit');
// Route untuk mengupdate data Stok
Route::put('/Stok/{Stok}', [StokController::class, 'update'])->name('Stok.update');
// Route untuk menghapus data Stok
Route::delete('/Stok/{Stok} ', [StokController::class, 'destroy'])->name('Stok.destroy');

// Rute untuk menampilkan semua data BarangMasuk
Route::get('/BarangMasuk', [BarangMasukController::class, 'index'])->name('BarangMasuk.index');
// Rute untuk menampilkan form membuat BarangMasuk baru
Route::get('/BarangMasuk/create', [BarangMasukController::class, 'create'])->name('BarangMasuk.create');
// Rute untuk menambahkan data BarangMasuk baru
Route::post('/BarangMasuk', [BarangMasukController::class, 'store'])->name('BarangMasuk.store');
// Route untuk menampilkan form edit
Route::get('/BarangMasuk/{BarangMasuk}', [BarangMasukController::class, 'edit'])->name('BarangMasuk.edit');
// Route untuk mengupdate data BarangMasuk
Route::put('/BarangMasuk/{BarangMasuk}', [BarangMasukController::class, 'update'])->name('BarangMasuk.update');
// Route untuk menghapus data BarangMasuk
Route::delete('/BarangMasuk/{BarangMasuk} ', [BarangMasukController::class, 'destroy'])->name('BarangMasuk.destroy');

// Rute untuk menampilkan semua data BarangKeluar
Route::get('/BarangKeluar', [BarangKeluarController::class, 'index'])->name('BarangKeluar.index');
// Rute untuk menampilkan form membuat BarangKeluar baru
Route::get('/BarangKeluar/create', [BarangKeluarController::class, 'create'])->name('BarangKeluar.create');
// Rute untuk menambahkan data BarangKeluar baru
Route::post('/BarangKeluar', [BarangKeluarController::class, 'store'])->name('BarangKeluar.store');
// Route untuk menampilkan form edit
Route::get('/BarangKeluar/{BarangKeluar}', [BarangKeluarController::class, 'edit'])->name('BarangKeluar.edit');
// Route untuk mengupdate data BarangKeluar
Route::put('/BarangKeluar/{BarangKeluar}', [BarangKeluarController::class, 'update'])->name('BarangKeluar.update');
// Route untuk menghapus data BarangKeluar
Route::delete('/BarangKeluar/{BarangKeluar} ', [BarangKeluarController::class, 'destroy'])->name('BarangKeluar.destroy');

// Rute untuk menampilkan semua data PinjamBarang
Route::get('/PinjamBarang', [PinjamBarangController::class, 'index'])->name('PinjamBarang.index');
// Rute untuk menampilkan form membuat PinjamBarang baru
Route::get('/PinjamBarang/create', [PinjamBarangController::class, 'create'])->name('PinjamBarang.create');
// Rute untuk menambahkan data PinjamBarang baru
Route::post('/PinjamBarang', [PinjamBarangController::class, 'store'])->name('PinjamBarang.store');
// Route untuk menampilkan form edit
Route::get('/PinjamBarang/{PinjamBarang}', [PinjamBarangController::class, 'edit'])->name('PinjamBarang.edit');
// Route untuk mengupdate data PinjamBarang
Route::put('/PinjamBarang/{PinjamBarang}', [PinjamBarangController::class, 'update'])->name('PinjamBarang.update');
// Route untuk menghapus data PinjamBarang
Route::delete('/PinjamBarang/{PinjamBarang} ', [PinjamBarangController::class, 'destroy'])->name('PinjamBarang.destroy');