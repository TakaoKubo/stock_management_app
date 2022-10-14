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
    //dd($request);
    
    //バリデーション
    $validator = Validator::make($request->all(),[
        'item_name'=>'required|max:255',
    ]);

    //バリデーションエラー
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //Eloquentモデル（登録処理）
    $books = new Book;
    $books->item_name = $request->item_name;
    $books->item_number = '1';
    $books->item_amount = '1000';
    $books->published = '2017-03-07 00:00:00';
    $books->save();
    return redirect('/');
});

Route::post('/booksedit/{books}',function(Book $books){
    //{books}id値を取得 =>Books $books id値の1レコード取得
    return view('booksedit',['book'=> $books]);
});

//本を削除・・・Route::deleteを使うためにbooks.blade.phpで@method('DELETE')という疑似フォームメソッドを使っている。
Route::delete('/book/{book}',function(Book $book){
    $book->delete();
    return redirect('/');
});

Route::post('/books/update', function(Request $request){
    //バリデーション
    $validator = Validator::make($request->all(),[
        'id' => 'required',
        'item_name'=>'required|max:255',
        'item_name' => 'required|min:3|max:255',
        'item_number' => 'required|min:1|max:3',
        'item_amount' => 'required|max:6',
        'published' => 'required',
    ]);

    //バリデーションエラー
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    //Eloquentモデル（登録処理）
    $books = Book::find($request->id);
    $books->item_name = $request->item_name;
    $books->item_number = '1';
    $books->item_amount = '1000';
    $books->published = '2017-03-07 00:00:00';
    $books->save();
    return redirect('/');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
