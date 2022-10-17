@extends('layouts.app')

@section('header')
@endsection

@section('content')

<!-- ▼▼ナビゲーションリンクパートここから▼▼　-->
<div id="content">
<div id="cont_left">
<!-- ▼▼Productページリンク列ここから▼▼　-->
<h2>PICK UP</h2>
<h3>今週の注目アイテム</h3>
<ul>
<li><a href="product.html#01">無添加石鹸と自然素材タオル</a></li>
<li><a href="product.html#02">薬用スキンケアローション</a></li>
<li><a href="product.html#03">香りの灯火シリーズ</a></li>
</ul>
<!-- ▲▲Productページリンク列ここから▲▲　-->
<!-- ▼▼listページリンク列ここから▼▼　-->
  <h3>商品ジャンル</h3>
<ul>
<li><a href="list.html#01">洗顔石鹸・タオル</a></li>
<li><a href="list.html#02">スキンケアローション</a></li>
<li><a href="list.html#03">アロマキャンドル</a></li>
<li><a href="list.html#04">手拭い</a></li>
<li><a href="list.html#05">入浴剤</a></li>
</ul>
<!-- ▲▲listページリンク列ここまで▲▲　-->
<!-- ▲▲ナビゲーションリンクパートここまで▲▲　-->

<!-- ▼▼newsテキストここから▼▼　-->
<h2>NEWS</h2>
<h3>2009/5/15</h3>
  <p>自然素材製品フェアに出展します。</p>
<h3>2009/5/10</h3>
  <p>優待15%OFFキャンペーンを開始！</p>
</div>
<!-- ▲▲newsテキストここまで▲▲　-->
  <!-- //end cont_left -->
<div id="cont_right">
<div class="title_grid">
  <h2>商品一覧</h2>
</div>
<!-- ▼▼商品列1ここから ▼▼ -->
<a name="01"></a>
<div class="list_row">
  <h3>本の一覧</h3>
  @if(count($books) > 0)
  <ul>
	@foreach($books as $book)
	<li>
		<div class="ichiran">{{$book->item_name}}
        <div><img src="upload/{{$book->item_img}}" width="100"></div>
        <div>価格 ￥{{$book->item_amount}}</div>
    </div>
</li>
	@endforeach
	@endif

  <div id="cont_right">



<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列5ここまで ▲▲ -->
</div><!-- //end cont_right -->
  <div class="clear_both"></div>
  
</div><!-- //content -->
<div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->
</div><!-- //wrapper -->

  @section('footer')
  @endsection

@endsection