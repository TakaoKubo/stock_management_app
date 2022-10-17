<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


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
    <a href="index.html"><img src="img/head_logo.gif" alt="head_logo" width="195" height="30" border="0" /></a><a href="#"></a><!-- ▼▼ロゴ画像▲▲　-->
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

    @yield('content')

    @section('footer')
    <div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->
    </div><!-- //wrapper -->

</body>
</html>
