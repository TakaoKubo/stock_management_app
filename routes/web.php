<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\BooksController;

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
// 本ダッシュボード表示
Route::get('/', [BooksController::class, 'index']);

Route::get('/mycart', [BooksController::class, 'mycart'])
->middleware('auth')
;

Route::post('/mycart', [BooksController::class, 'addMycart']);

Route::get('/management', [BooksController::class, 'management'])
//->middleware('auth')
;

Route::get('/item/{id}',[BooksController::class, 'item']);

Route::post('/books',[BooksController::class, 'store']);

Route::post('/booksedit/{books}', [BooksController::class, 'edit']);

Route::delete('/book/{book}', [BooksController::class, 'destroy']);

Route::post('/books/update',[BooksController::class,'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
