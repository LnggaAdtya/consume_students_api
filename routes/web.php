<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

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
// mengambil semua data & search
Route::get('/', [StudentsController::class, 'index']);

// halaman tambah data
Route::get('/add',[StudentsController::class, 'create'])->name('add');

//tambah data
Route::post('/add/send', [StudentsController::class, 'store'])->name('send');

// Menampilkan halaman edit dan mengirim satu datanya
Route::get('/edit/{id}', [StudentsController::class, 'edit'])->name('edit');

// mengubah data
Route::patch('/update/{id}', [StudentsController::class, 'update'])->name('update');

//hapus data pake sofdeletes
Route::delete('/delete/{id}', [StudentsController::class, 'destroy'])->name('delete');

// mngambil data sampah
Route::get('/trash', [StudentsController::class, 'trash'])->name('trash');

// restore
Route::get('/trash/restore/{id}', [StudentsController::class, 'restore'])->name('restore');

//Hapus permanen
Route::get('/trash/delete/permanent/{id}', [StudentsController::class, 'permanent'])->name('permanent');

