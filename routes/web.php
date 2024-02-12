<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/authors',[AuthorController::class,'author'])->name('author.index');
Route::post('/authors', [AuthorController::class, 'store'])->name('authors.store');

Route::get('/books', [BookController::class, 'books'])->name('books.index');
Route::post('/books', [BookController::class, 'store'])->name('books.store');


