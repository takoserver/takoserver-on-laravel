<!DOCTYPE html>
<html lang="ja">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200;400&display=swap');
    </style>
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
  </head><body>
<header id="header">
  <div class="inner">
    <a href="./">
    <img src="./images/logo.png" alt="a" class="logo">
  </a>
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
      <li><a href="https://line.me/ti/g2/uSmNVsWLGgG5_VJnX1vo4UHtCCe8ypeOuxS80g?utm_source=invitation&utm_medium=link_copy&utm_campaign=default">オープンチャット</a></li>
    </ul>
  </div>
</header>