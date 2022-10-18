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
      <h2>MAICOM STORE.</h2>
      <dl><dt>address</dt>
        <dd>〒100-0003<br />
          東京都千代田区一ツ橋1-1-1</dd>
        <dt>tel</dt>
        <dd>03-0000-0000</dd>
        <dt>fax</dt>
        <dd>03-0000-0000</dd>
        <dt>open</dt>
        <dd>11:00 - 20:00</dd>
          </dl></div></div>
<!-- ▲▲住所列ここまで▲▲　-->

<!-- ▼▼ 会社概要列ここから ▼▼ -->
<div class="company_detail">
  <h2>会社概要</h2>
  <dl><dt>社名</dt>
    <dd>株式会社マイコミストア</dd>
    <dt>代表者</dt>
    <dd>代表取締役　毎日一郎</dd>
    <dt>設立</dt>
    <dd>1998年5月5日</dd>
    <dt>従業員数</dt>
    <dd>13名</dd>
    <dt>資本金</dt>
    <dd>1,000万円</dd>
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