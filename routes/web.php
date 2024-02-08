<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembelianController;

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

// Route::resource('pembelian', PembelianController::class);

Route::get('/pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::get('/pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create');

Route::post('/pembelian/store', [PembelianController::class, 'store'])->name('pembelian.store');

Route::get('/pembelian/edit/{id}', [PembelianController::class, 'edit'])->name('pembelian.edit');

Route::put('/pembelian/update/{id}', [PembelianController::class, 'update'])->name('pembelian.update');
Route::delete('/pembelian/destroy/{id}', [PembelianController::class, 'destroy'])->name('pembelian.destroy');
Route::get('/pembelian/show/{id}', [PembelianController::class, 'show'])->name('pembelian.show');
Route::delete('/pembelian/hapus', [PembelianController::class, 'deleteSelected'])->name('pembelian.hapus');


