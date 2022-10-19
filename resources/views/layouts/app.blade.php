<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('/favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png">

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.astatic.com"> 
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/default.css">
    <!-- Scripts -->
    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->
</head>
<body>
    @section('header')
        <!-- ============ ヘッダー =============== -->
<div id="wrapper">
<a name="top"></a>
<div id="header">
  <div id="head_logo">
    <a href="/"><img src="{{asset('img/head_logo.png')}}" alt="head_logo" width="195" height="60" border="0" /></a><a href="#"></a><!-- ▼▼ロゴ画像▲▲　-->
    <!-- ▼▼ロゴテキストここから▼▼　-->
    <h3>We deliver a beautiful book.</h3>
    <!-- ▲▲ロゴテキストここまで▲▲　-->
  </div>

  <div id="head_right">
    <!-- ▼▼キャッチ＆案内テキストここから▼▼　-->
    <h1>お望みの御本を紹介いたします</h1>
    <h2>Tel.03-1234-5678｜営業時間 月-金　9:00-7:30</h2>
    <!-- ▲▲キャッチ＆案内テキストここまで▲▲　-->

    <!-- ▼▼メニュー項目ここから▼▼　-->
    <div id="menubar">
      <a href="/">ホーム</a>
      <a href="management">従業員向けサイト</a>

        <div class="clear_both"></div>
      <!-- ▲▲メニュー項目ここまで▲▲　-->
    </div>
  </div>
</div><!-- ============ ヘッダー =============== -->

    @section('cont_left')
    <!-- ▼▼ナビゲーションリンクパートここから▼▼　-->
<div id="content">
  <div id="cont_left">
  <!-- ▼▼Productページリンク列ここから▼▼　-->
  <h2>RECOMMEND ITEM  & SORT</h2>
  <h3>今週の注目書籍</h3>
  <ul>
    <li><a href="{{url('item/5')}}">無添加石鹸と自然素材タオル</a></li>
    <li><a href="item/7">薬用スキンケアローション</a></li>
    <li><a href="item/9">香りの灯火シリーズ</a></li>
  </ul>
  <!-- ▲▲Productページリンク列ここから▲▲　-->
  <!-- ▼▼listページリンク列ここから▼▼　-->
  <h3>商品並び替え</h3>
  <ul>
    <li><a href="?sort=item_name&order=asc">商品名昇順</a></li>
    <li><a href="?sort=item_name&order=desc">商品名降順</a></li>
    <li><a href="?sort=item_number&order=asc">在庫数昇順</a></li>
    <li><a href="?sort=item_number&order=desc">在庫数降順</a></li>
    <li><a href="?sort=published&order=asc">出版年月日昇順</a></li>
    <li><a href="?sort=published&order=desc">出版年月日降順</a></li>
  </ul>
  <!-- ▲▲listページリンク列ここまで▲▲　-->
  <!-- ▲▲ナビゲーションリンクパートここまで▲▲　-->

  <!-- ▼▼newsテキストここから▼▼　-->
  <h2>NEWS</h2>
  <h3>2022/10/10</h3>
  <p>秋のブックフェア、開催中です。</p>
  <h3>2022/9/10</h3>
  <p>優待15%OFFキャンペーンを開始！</p>
</div>
<!-- ▲▲newsテキストここまで▲▲　-->

    @yield('content')

    @section('footer')
    <div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->
    </div><!-- //wrapper -->

</body>
</html>
