<?php

use App\Http\Controllers\FlowerController;
use App\Http\Controllers\LoginController;
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
})->name('welcome');

Route::get('/produk', [FlowerController::class, 'product'])->name('product');
Route::get('/admin', [FlowerController::class,'index'])->name('admin.dashboard');

// Route untuk Login
Route::get('/login', function() {
  return view('admin.login');
});
Route::post('/login', [LoginController::class,'authenticate'])->name('login.auth');
Route::post('/logout', [LoginController::class,'logout'])->name('logout');


// Route untuk Create
Route::get('/admin/create', [FlowerController::class,'create'])->name('admin.create');
Route::post('/admin', [FlowerController::class,'store'])->name('admin.store');

// Route untuk Edit
Route::get('/admin/{item}/edit', [FlowerController::class,'edit'])->name('admin.edit');
Route::post('/admin/{item}', [FlowerController::class,'update'])->name('admin.update');

//Route untuk Delete
Route::delete('/admin/{item}', [FlowerController::class,'destroy'])->name('admin.destroy');