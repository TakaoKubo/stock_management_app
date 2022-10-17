<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

class BooksController extends Controller
{
    public function management(){
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('books', [
            'books' => $books
        ]);
    }

//更新画面
public function edit(Book $books){
    return view('booksedit', [
        'book' => $books
    ]);
}

//削除処理
public function destroy(Book $book){
    $book->delete();
    return redirect('/');
}

 //更新
 public function update(request $request){
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
 }   

 public function store(Request $request)
 {
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
         $move = $file->move('./upload/',$filename);
     } else {
         $filename = "";
     }

     //Eloquentモデル（登録処理）
     $books = new Book;
     $books->item_name = $request->item_name;
     $books->item_number = $request->item_number;
     $books->item_amount =$request->item_amount;
     $books->item_img = $filename;
     $books->published = $request->published;
     $books->save();
     return redirect('/');
 }
}
