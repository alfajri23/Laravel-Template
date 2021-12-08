<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/barang',[BarangController::class,'index'])->name('barangAll');
Route::post('/store',[BarangController::class,'store'])->name('barangStore');
Route::get('/delete/{id}',[BarangController::class,'delete'])->name('barangDelete');
Route::get('/edit/{id}',[BarangController::class,'edit'])->name('barangEdit');
