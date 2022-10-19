<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Validator;

class BooksController extends Controller
{    
    public function index(Request $request){
        $sort = $request->sort;
        $order = $request->order;
        if ((isset($sort)) && (isset($order))) {
            $books = Book::orderBy($sort, $order)->get();
        }else{
            $books = Book::orderBy('id', 'asc')->get();
        }
        $param = ['books'=>$books, 'sort' => $sort, 'order' => $order];
        return view('index',$param);
    }

    public function item($id){
        $item = Book::find($id);
        return view('item', [
            'item'=> $item
        ]);
    }

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
    return redirect('/management');
}

 //更新
 public function update(request $request){
      //バリデーション
      $validator = Validator::make($request->all(),[
        'id' => 'required',
        'item_name'=>'required|max:255',
        'item_number' => 'required|max:255',
        'item_amount' => 'required|max:255',
        'writer' => 'required|max:255',
        'page_number' => 'required|max:255',
        'publisher' => 'required|max:255',
        'genre' => 'required|max:255',
        'synopsis' => 'required|max:255',
        'published' => 'required',
    ]);

    //バリデーションエラー
    if($validator->fails()){
        return redirect('/management')
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

    //Eloquentモデル（更新処理）
    $books = Book::find($request->id);
    $books->item_name = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
    $books->writer = $request->writer;
    $books->page_number = $request->page_number;
    $books->publisher = $request->publisher;
    $books->genre = $request->genre;
    $books->synopsis = $request->synopsis;
    $books->item_img = $filename;
    $books->published = $request->published;
    $books->save();
    return redirect('/management');
 }   

 public function store(Request $request)
 {
     //バリデーション
     $validator = Validator::make($request->all(),[
        'item_name'=>'required|max:255',
        'item_number' => 'required|max:255',
        'item_amount' => 'required|max:255',
        'writer' => 'required|max:255',
        'page_number' => 'required|max:255',
        'publisher' => 'required|max:255',
        'genre' => 'required|max:255',
        'synopsis' => 'required|max:255',
        'published' => 'required',
     ]);

     //バリデーションエラー
     if($validator->fails()){
         return redirect('/management')
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
     $books->item_amount = $request->item_amount;
     $books->writer = $request->writer;
     $books->page_number = $request->page_number;
     $books->publisher = $request->publisher;
     $books->genre = $request->genre;
     $books->synopsis = $request->synopsis;
     $books->item_img = $filename;
     $books->published = $request->published;
     $books->save();
     return redirect('/management');
 }
}
