<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use Validator;
use Illuminate\Support\Facades\Mail; //追記
use App\Mail\Thanks;//追記

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
        $books = Book::Paginate(6);
        $param = ['books'=>$books, 'sort' => $sort, 'order' => $order];
        return view('index',$param);
    }

    public function item($id){
        $item = Book::find($id);
        return view('item', [
            'item'=> $item
        ]);
    }

    public function myCart(Cart $cart)
    {
        $data = $cart->showCart();
        return view('mycart',$data);
    }

    public function addMycart(Request $request,Cart $cart)
   {
       //カートに追加の処理
       $stock_id=$request->item_id;
       $message = $cart->addCart($stock_id);

       //追加後の情報を取得
       $data = $cart->showCart();

       return view('mycart',$data)->with('message', $message);
   }

   public function deleteCart(Request $request,Cart $cart)
   {
       //カートから削除の処理
       $stock_id=$request->stock_id;
       $message = $cart->deleteCart($stock_id);

       //追加後の情報を取得
       $data = $cart->showCart();

       return view('mycart',$data)->with('message', $message);
   }

   public function checkout(Cart $cart)
   {
        $checkout_items = $cart->checkoutCart();
        Mail::to('test@example.com')->send(new Thanks);
       return view('checkout');
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
        $move = $file->move('./upload/',$filename);
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
        // 'id' => 'required',
        'item_name'=>'required|max:255',
        'item_name' => 'required|max:255',
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
