<?php

use Illuminate\Support\Facades\Route;
use App\Models\Book;
use Illuminate\Http\Request;

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
    $books = Book::orderBy('created_at','asc')->get();
    return view('books',[
        'books' => $books
    ]);
})
// ->middleware('auth')
;

//本を追加
Route::post('/books',function(Request $request){
    //
});

//本を削除
Route::delete('/book/{book}',function(Book $book){
    $book->delete();
    return redirect('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
