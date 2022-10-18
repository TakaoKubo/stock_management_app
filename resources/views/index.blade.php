@extends('layouts.app')

@section('header')
@endsection

@section('cont_left')
@endsection

@section('content')

<div id="cont_right">
  <div class="title_grid">
    <h2>本の一覧</h2>
  </div>
  <!-- ▼▼商品列1ここから ▼▼ -->
  <a name="01"></a>
  <div class="list_row">
    <!-- <h3>本の一覧</h3> -->
    @if(count($books) > 0)
      <ul>
	    @foreach($books as $book)
	      <li><a href="/item/{{$book->id}}">
		      <div class="ichiran">
            <div><img class="thumbnail" src="upload/{{$book->item_img}}" width="70" height="70" style="object-fit: cover;"></div>
            <div>{{$book->item_name}}</div>
            <div>￥{{$book->item_amount}}</div>
          </div>
        </a>
        </li>
	    @endforeach
	  @endif

  <div id="cont_right">


<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列5ここまで ▲▲ -->
</div><!-- //end cont_right -->
  <div class="clear_both"></div>
  
@endsection

@section('footer')

@endsection

