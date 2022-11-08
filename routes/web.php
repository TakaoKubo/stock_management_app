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

Route::post('/mycart', [BooksController::class, 'addMycart'])
->middleware('auth')
;

Route::post('/checkout', [BooksController::class, 'checkout'])
->middleware('auth')
;

Route::post('/cartdelete', [BooksController::class, 'deleteCart'])
->middleware('auth')
;

Route::get('admin/management', [BooksController::class, 'management'])
->middleware('auth:admin')
;

Route::get('/item/{id}',[BooksController::class, 'item']);

Route::post('/admin/books',[BooksController::class, 'store']);

Route::post('/admin/booksedit/{books}', [BooksController::class, 'edit']);

Route::delete('/admin/book/{book}', [BooksController::class, 'destroy']);

Route::post('/admin/books/update',[BooksController::class,'update']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/admin/login', 'admin/login');
Route::post('/admin/login', [App\Http\Controllers\admin\LoginController::class, 'login']);
Route::view('/admin/register', 'admin/register');
Route::post('/admin/register', [App\Http\Controllers\admin\RegisterController::class, 'register']);
Route::view('/admin/home', 'admin/home')->middleware('auth:admin');