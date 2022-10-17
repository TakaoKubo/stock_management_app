@extends('layouts.app')
@section('content')
<div id="wrapper">
<!-- ============ ヘッダー =============== -->
<div id="header">
<div id="head_logo">
<a href="index.html"><img src="img/head_logo.gif" alt="head_logo" width="195" height="30" border="0" /></a><!-- ▼▼ロゴ画像▲▲　-->
<!-- ▼▼ロゴテキストここから▼▼　-->
<h3>We deliver a useful item <br />
for your beautiful skin caring. </h3>
<!-- ▲▲ロゴテキストここまで▲▲　-->
</div>

<div id="head_right">
<!-- ▼▼キャッチ＆案内テキストここから▼▼　-->
<h1>貴女の美肌を守ります</h1>
<h2>Tel.03-1234-5678｜営業時間 月-金　9:00-7:30</h2>
<!-- ▲▲キャッチ＆案内テキストここまで▲▲　-->

<!-- ▼▼メニュー項目ここから▼▼　-->
<div id="menubar">
<a href="index.html">ホーム</a>
<a href="product.html">商品案内</a>
<a href="list.html">商品一覧</a>
<a href="company.html">会社案内</a>
<div class="clear_both"></div>
<!-- ▲▲メニュー項目ここまで▲▲　-->
</div>
</div>
</div><!-- ============ ヘッダー =============== -->

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

<!-- ▼▼バナーリンクパートここから▼▼　-->
<!-- ▼▼バナーリンク列1ここから▼▼　-->
<div id="cont_right">
<div class="product_row">
  <div class="main_title">
    <h2>無添加石鹸と自然素材タオルのセット</h2>
    <h3>【今なら優待15%OFFキャンペーン!!】</h3>
    <div class="clear_both"></div></div>
  <a href="product.html#01">
  <img src="img/img_01.jpg" alt="img_01" width="560" height="235" border="0" /></a>
  <div class="main_link">
  <a href="product.html#01">&gt;&gt;詳しくはこちら</a></div></div>
<!-- ▲▲バナーリンク列1ここまで▲▲　-->
<!-- ▼▼バナーリンク列2ここから▼▼　-->
<div class="topics_row">
  <div class="topics_left">
  <h2>薬用スキンケアローション</h2>
  <a href="product.html#02">
  <img src="img/img_02.jpg" alt="img_02" width="270" height="135" border="0" /></a>
<div class="main_link">
<a href="product.html#02">&gt;&gt;詳しくはこちら</a></div></div>
<!-- ▲▲バナーリンク列2ここまで▲▲　-->
<!-- ▼▼バナーリンク列3ここから▼▼　-->
<div class="topics_right">
<h2>香りの灯火・花畑</h2>
<a href="product.html#03">
<img src="img/img_03.jpg" alt="img_03" width="270" height="135" border="0" /></a>
<div class="main_link">
<a href="product.html#03">&gt;&gt;詳しくはこちら</a></div>
</div>
<div class="clear_both"></div></div>
</div><!-- //end cont_right -->
<!-- ▲▲バナーリンク列3ここまで▲▲　-->
<!-- ▲▲バナーリンクパートここまで▲▲　-->  
  <div class="clear_both"></div>
</div><!-- //content -->

<div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->

</div><!-- //wrapper -->

@endsection