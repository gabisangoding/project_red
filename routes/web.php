<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

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
//halaman utama daftar buku
Route::get('/buku', [LibraryController::class, 'index'])->name('buku');
//tambah data buku
Route::get('/tambahbuku', [LibraryController::class, 'tambahbuku'])->name('tambahbuku');
Route::post('/insertdata', [LibraryController::class, 'insertdata'])->name('insertdata');
//edit
Route::get('/tampilindata/{id}', [LibraryController::class, 'tampilindata'])->name('tampilindata'); //nampilin data dulu baru ke update
Route::post('/updatedata/{id}', [LibraryController::class, 'updatedata'])->name('updatedata');
//delete
Route::get('/delete/{id}', [LibraryController::class, 'delete'])->name('delete');