<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk Produk (Barang)
Route::resource('products', ProductController::class);

// Route untuk Pengeluaran
Route::resource('expenses', ExpenseController::class);

// Route untuk Uang Masuk / Keluar (Transaksi)
Route::resource('transactions', TransactionController::class);

// Route Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout ', [AuthController::class, 'logout'])->name('logout');

Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');