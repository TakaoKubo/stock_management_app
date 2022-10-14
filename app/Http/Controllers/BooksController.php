<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index(){
        $books = Book::orderBy('created_at', 'asc')->get();
        return view('books', [
            'books' => $books
        ]);
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

    //Eloquentモデル（更新処理）
    $books = Book::find($request->id);
    $books->item_name = $request->item_name;
    $books->item_number = $request->item_number;
    $books->item_amount = $request->item_amount;
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

     //Eloquentモデル（登録処理）
     $books = new Book;
     $books->item_name = $request->item_name;
     $books->item_number = $request->item_number;
     $books->item_amount =$request->item_amount;
     $books->published = $request->published;
     $books->save();
     return redirect('/');
 }
}
