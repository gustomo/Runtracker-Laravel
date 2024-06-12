<?php

use App\Http\Controllers\LombaController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options;



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
    return view( 'welcome');
});

Route::get('/index',function(){
    return view ('index');
});

Route::resource('admins', AdminController::class);
Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');
Route::post('admins/pdf', [AdminController::class,'store'])->name('admins.pdf');




Route::get('/lombas', [LombaController::class, 'index'])->name('lombas.index');

// Route untuk menampilkan halaman tambah lomba
Route::get('/lombas/create', [LombaController::class, 'create'])->name('lombas.create');

// Route untuk menyimpan data lomba baru
Route::post('/lombas', [LombaController::class, 'store'])->name('lombas.store');

// Route untuk menampilkan halaman edit lomba
Route::get('/lombas/{lomba}/edit', [LombaController::class, 'edit'])->name('lombas.edit');

// Route::put('/lombas/{lomba}', [LombaController::class, 'update'])->name('lombas.update');


// Route untuk mengupdate data lomba
Route::put('/lombas/{lomba}', [LombaController::class, 'update'])->name('lombas.update');

// Route untuk menghapus data lomba
Route::delete('/lombas/{lomba}', [LombaController::class, 'destroy'])->name('lombas.destroy');


Route::get('/lombas/cetak', [LombaController::class, 'cetak'])->name ('lombas.cetak');









