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
Route::get('/', [BooksController::class, 'index'])
// ->middleware('auth')
;

//本を追加
Route::post('/books',function(Request $request){
    //dd($request);
    
    //バリデーション
    $validator = Validator::make($request->all(),[
        'item_name'=>'required|min:3|max:255',
        'item_number'=>'required|min:1|max:3',
        'item_amount'=>'required|max:6',
        'published'=>'required',
    ]);

    //バリデーションエラー
    if($validator->fails()){
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $file = $request->file('item_img'); //file取得
    if(!empty($file)){                  //fileが空かチェック
        $filename = $file->getClientOriginalName();
        $move = $file->move('../upload/',$filename);
    } else {
        $filename = "";
    }

    //Eloquentモデル（登録処理）
    $books = new Book;
    $books->item_name = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->item_img = $filename;
    $books->published = $request->published;
    $books->save();
    return redirect('/');
});

Route::post('/booksedit/{books}', [BooksController::class, 'edit']);

//本を削除・・・Route::deleteを使うためにbooks.blade.phpで@method('DELETE')という疑似フォームメソッドを使っている。
Route::delete('/book/{book}',function(Book $book){
    $book->delete();
    return redirect('/');
});

/*
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

    //Eloquentモデル（更新処理）
    $books = Book::find($request->id);
    $books->item_name = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->published = $request->published;
    $books->save();
    return redirect('/');
});
*/

Route::post('/books/update',[BooksController::class,'update']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
