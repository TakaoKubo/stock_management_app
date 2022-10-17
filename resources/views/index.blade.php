@extends('layouts.app')
@section('content')
<div id="wrapper">
<a name="top"></a>

<!-- ============ ヘッダー =============== -->
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
  <h3>洗顔石鹸・タオル</h3>
  <ul>
<!-- ▼▼商品コマ1ここから ▼▼ -->
    <li><div class=""><img src="img/img_07.jpg" alt="img_07" width="150" height="140" border="0" /></div>
無添加石鹸と自然素材タオルのセット<br />
価格　1,580円（税込）</li>
<!-- ▲▲商品コマ1ここまで ▲▲ -->
<!-- ▼▼商品コマ2ここから ▼▼ -->
    <li><div class=""><img src="img/img_08.jpg" alt="img_08" width="150" height="140" border="0" /></div>
自然素材のタオル・ボディブラシセット<br />
価格　1,280円（税込）</li>
<!-- ▲▲商品コマ2ここまで ▲▲ -->
<!-- ▼▼商品コマ3ここから ▼▼ -->
<li id="list_row_right"><div class=""><img src="img/img_09.jpg" alt="img_09" width="150" height="140" border="0" /></div>
天然ハーブ石鹸6個セット<br />
価格　980円（税込）</li>
<!-- ▲▲商品コマ3ここまで ▲▲ -->
      </ul>  <div class="clear_both"></div></div>
<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列1ここまで ▲▲ -->
<!-- ▼▼商品列2ここから ▼▼ -->
<a name="02"></a>
<div class="list_row">
  <h3>スキンケアローション</h3>
  <ul>
  <!-- ▼▼商品コマ1ここから ▼▼ -->
    <li><div class=""><img src="img/img_10.jpg" alt="img_10" width="150" height="140" border="0" />
    </div>薬用スキンケアローション（3本セット）<br />
2,800円（税込）</li>
<!-- ▲▲商品コマ1ここまで ▲▲ -->
<!-- ▼▼商品コマ2ここから ▼▼ -->
<li><div class=""><img src="img/img_11.jpg" alt="img_11" width="150" height="140" border="0" />
</div>薬用ボディローション（2本セット）<br />
1,980円（税込）</li>
<!-- ▲▲商品コマ2ここまで ▲▲ -->
      </ul><div class="clear_both"></div>
</div>
<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列2ここまで ▲▲ -->
<!-- ▼▼商品列3ここから ▼▼ -->
<a name="03"></a>
<div class="list_row">
  <h3>アロマキャンドル</h3>
  <ul>
<!-- ▼▼商品コマ1ここから ▼▼ -->
    <li><div class=""><img src="img/img_12.jpg" alt="img_12" width="150" height="140" border="0" />
    </div>香りの灯火・花畑 <br />
1,580円（税込）</li>
<!-- ▲▲商品コマ1ここまで ▲▲ -->
<!-- ▼▼商品コマ2ここから ▼▼ -->
<li><div class=""><img src="img/img_13.jpg" alt="img_13" width="150" height="140" border="0" />
    </div>香りの灯火・清涼 <br />
1,580円（税込）</li>
<!-- ▲▲商品コマ2ここまで ▲▲ -->
<!-- ▼▼商品コマ3ここから ▼▼ -->
<li id="list_row_right"><div class=""><img src="img/img_14.jpg" alt="img_14" width="150" height="140" border="0" />
    </div>香りの灯火・薔薇 <br />
1,580円（税込）</li>
<!-- ▼▼商品コマ3ここまで ▼▼ -->
      </ul>  <div class="clear_both"></div>
</div>
<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列3ここまで ▲▲ -->
<!-- ▼▼商品列4ここから ▼▼ -->
<a name="04"></a>
<div class="list_row">
  <h3>手拭い</h3>
  <ul>
<!-- ▼▼商品コマ1ここから ▼▼ -->
    <li><div class=""><img src="img/img_15.jpg" alt="img_15" width="150" height="140" border="0" />
    </div>綿100％手拭い（10枚セット） <br />
1,280円（税込）</li>
<!-- ▲▲商品コマ1ここまで ▲▲ -->
     </ul><div class="clear_both"></div>
</div>
<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列4ここまで ▲▲ -->
<!-- ▼▼商品列5ここから ▼▼ -->
<a name="05"></a>
<div class="list_row">
  <h3>入浴剤</h3>
  <ul>
<!-- ▼▼商品コマ1ここから ▼▼ -->
    <li><div class=""><img src="img/img_16.jpg" alt="img_09" width="150" height="140" border="0" />
    </div>入浴剤と自然石鹸のセット（各4個） <br />
1,580円（税込）</li>
<!-- ▲▲商品コマ1ここまで ▲▲ -->
<!-- ▼▼商品コマ2ここから ▼▼ -->
<li><div class=""><img src="img/img_17.jpg" alt="img_17" width="150" height="140" border="0" />
    </div>入浴剤5個セット <br />
680円（税込）</li>
<!-- ▼▼商品コマ2ここまで ▼▼ -->
      </ul><div class="clear_both"></div>

</div>
<div class="page_top"><a href="#top">▲ページトップへ</a></div>
<!-- ▲▲商品列5ここまで ▲▲ -->
</div><!-- //end cont_right -->
  <div class="clear_both"></div>
  
</div><!-- //content -->
<div id="footer">Copyright &copy; 2009 MAICOM STORE inc., All Rights Reserved.</div><!-- ▼▼コピーライト▲▲　-->
</div><!-- //wrapper -->

@endsection