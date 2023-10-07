<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Book Controller
Route::get('/books', [App\Http\Controllers\BookController::class, 'index'])->name('home.book');
Route::get('/books/create', [App\Http\Controllers\BookController::class, 'create'])->name('create.book');
Route::post('/books/store', [App\Http\Controllers\BookController::class, 'store'])->name('store.book');
// Update Data
Route::get('/books/formEdit/{id}', [App\Http\Controllers\BookController::class, 'formEdit'])->name('form.edit.book');
Route::put('/books/update/{id}', [App\Http\Controllers\BookController::class, 'update'])->name('update.book');
// Hapus Data
Route::delete('/books/delete', [App\Http\Controllers\BookController::class, 'delete'])->name('delete.book');
// Show Data
Route::get('/books/show/{id}', [App\Http\Controllers\BookController::class, 'show'])->name('show.book');