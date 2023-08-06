<!DOCTYPE html>
<html lang="ja">
<head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@200;400&display=swap');
    </style>
    <link rel="icon" href="/tako.ico">
    <link rel="stylesheet" href="https://takoserver.com/css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/destyle.css@1.0.15/destyle.css"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Philosopher">
    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    </head><body>
      <header>
        <div class="logo">
            <a href="https://takoserver.com"><img src="https://takoserver.com/images/logo.png/" alt="logo"></a>
        </div>
        <div id="hamburger">
            <div class="icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <nav class="sm">
          <ul class="menu-ul">
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
       </nav>
        <nav class="pc">
          <ul class="menu-ul">
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
        </nav>
      </header>
      <script src="jquery-3.5.1.min.js"></script>
        <script>
          $('#hamburger').on('click', function(){
          $('.icon').toggleClass('close');
          $('.sm').slideToggle();
          });
        </script>
