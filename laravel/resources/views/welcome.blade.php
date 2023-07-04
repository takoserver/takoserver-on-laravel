<!DOCTYPE html>
<html lang="ja">
<head>
    <link rel="stylesheet" href="./css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">
    <title>あたらしめのタコサバ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
</head><body>
<header id="header">
  <div class="inner">
    <img src="./images/logo.png" alt="a" class="logo">
    <ul class="navi">
        @if (Route::has('login'))
            @auth
                <li><a href="{{ url('/home') }}">サービス</a></li>
                <li><a href="./logout">ログアウト</a></li>
            @else
                <li><a href="{{ route('login') }}">ログイン</a></li>

                @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">登録</a></li>
                @endif
            @endauth
    @endif
      <li><a href="#">オープンチャット</a></li>
    </ul>
  </div>
</header><div class="hero overlay">
    <div class="text-box">
    <h1 class="title">takoserver project!</h1>
    <p class="description">たこが偏差値を消費して開発しているサーバーです</p>
  </div>
</div>
<div class="news-contents wrapper">
<article class="article">
    <div class="post-info">
        <h2 class="post-title">ホームページが新しくなりました</h2>
        <p class="post-date">4/30 <span>2023</span></p>
        <p class="post-cat">カテゴリー：お知らせ</p>
    </div>
    <img src="./images/logo-mine.jpg" alt="tako">
    <p>
        前のホームページ兼実験場はいじりすぎて死にました<br>
        今回は前よりもシンプルなかんじでつくったから多分バグらないです(フラグ)<br>
        ↓はtakoserverの説明です<br>
        takoserverはマイクラサーバーやwebサーバー、人にサーバー貸したり貸さなかったりしている謎集団です<br>
        最近親にルーターを侵略されたせいでvpn経由で公開しております<br>
        今はwebからマイクラサーバーやwebサーバーを貸したり貸さなかったりするツールを作っています<br>
    </p>
    <p>たこたこたこたこたこたこたこたこ</p>
</article>
<aside>
    <h3 class="sub-title">カテゴリー</h3>
    <ul class="sub-menu">
        <li><a href="#">aaaaaaaaa</a></li>
        <li><a href="#">bbbbbbbbbb</a></li>
        <li><a href="#">bbbbbb</a></li>
        <li><a href="#">dddddd</a></li>
    </ul>

    <h3 class="sub-title">takoserverについて</h3>
    <p>
        お家で動いてるさーばーでプログラミングしたやつを動かして遊んでいます
        不定期にいじいじしているだけなので期待しないでください
    </p>
</aside>

</div>
<!--
    <div class="main">
        <h2 class="midashi1">takoserverについて</h2>
        <p>takoserverはマイクラサーバーやwebサーバー、人にサーバー貸したり貸さなかったりしている謎集団です</p>
        <p>最近親にルーターを侵略されたせいでvpn経由で公開しております</p>
        <p>今はwebからマイクラサーバーやwebサーバーを貸したり貸さなかったりするツールを作っています</p>
        <p></p>
    </div>
     <hr color=#D9D9D9 align="center">
   <div class="main">
        <h2 class="midashi1">takoserverの歴史</h2>
    </div>
--><footer>
    <div class="footer-m">
        <p><small>Copyright &copy; 2022-2023 Tomiyama Shota All Rights Reserved.</small></p>
        <a href="http://localhost/privacy" class="footer-a">プライバシーポリシー</a>
    </div>
</footer>
</html>