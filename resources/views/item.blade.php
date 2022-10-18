@extends('layouts.app')

@section('header')
@endsection

@section('content')
<head>
<link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>
</head>

<div id="cont_right">

<!-- ▼▼ 会社概要カテゴリここから ▼▼ -->

<div class="title_grid">
  <h2>{{$item->item_name}}</h2>
</div>
<div class="company_info">
<div><a href="../upload/{{$item->item_img}}" data-lightbox="group"><img src="../upload/{{$item->item_img}}" width="100%" height="auto" ></a></div>
    <div class="company_info_text">
<!-- ▼▼住所列ここから▼▼　-->
      <h3>{{$item->item_name}}</h3>
      <dl><dt>■著者</dt>
        <dd>{{$item->writer}}<br />
        <dt>■価格</dt>
        <dd>{{$item->item_amount}}円<br />
          </dl></div></div>
<!-- ▲▲住所列ここまで▲▲　-->

<!-- ▼▼ 会社概要列ここから ▼▼ -->
<div class="company_detail">
  <h2>概要</h2>
  <dl><dt>配信日</dt>
    <dd>{{$item->published}}</dd>
    <dt>ページ数</dt>
    <dd>{{$item->page_number}}</dd>
    <dt>掲載誌</dt>
    <dd>{{$item->publisher}}</dd>
    <dt>ジャンル</dt>
    <dd>{{$item->genre}}</dd>
    <dt>あらすじ</dt>
    <dd>{{$item->synopsis}}</dd>
</dl></div>
<!-- ▲▲ 会社概要列ここまで ▲▲ -->
<!-- ▲▲ 会社概要カテゴリここまで ▲▲ -->

<div class="page_top"><a href="#top">▲ページトップへ</a></div>


</div><!-- //end cont_right -->
  
  <div class="clear_both"></div>
  
</div><!-- //content -->
  


  @section('footer')
  <div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->
    </div><!-- //wrapper -->
  @endsection

@endsection