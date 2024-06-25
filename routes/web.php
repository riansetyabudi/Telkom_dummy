<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

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
    return view('home');
});
Route::get('/pengaduan', [CategoryController::class, 'index'])->name('pengaduan.index');
Route::get('/pengaduan/tambah', [CategoryController::class, 'create'])->name('pengaduan.create');
Route::post('/pengaduan/store', [CategoryController::class, 'store'])->name('store');
Route::get('/pengaduan/edit/{id}', [CategoryController::class, 'edit']);
Route::put('/pengaduan/update/{id}', [CategoryController::class, 'update']);
Route::get('/pengaduan/hapus/{id}', [CategoryController::class, 'delete']);
Route::get('/pengaduan/destroy/{id}', [CategoryController::class, 'destroy']);
Route::get('/pengaduan/cetak', [CategoryController::class, 'cetak'])->name('pengaduan.cetak');

Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/tambah', [TransactionController::class, 'create']);
Route::post('/transaction/store', [TransactionController::class, 'store']);
Route::get('/transaction/edit/{id}', [TransactionController::class, 'edit']);
Route::put('/transaction/update/{id}', [TransactionController::class, 'update']);
Route::get('/transaction/hapus/{id}', [TransactionController::class, 'delete']);
Route::get('/transaction/destroy/{id}', [TransactionController::class, 'destroy']);
Route::get('/transaction/cetak', [TransactionController::class, 'cetak']);


