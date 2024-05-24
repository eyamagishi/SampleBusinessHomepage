<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ここにサイト説明を入れます">
    <link rel="stylesheet" href="css/style.css">
    @yield('styles')
</head>
<body class="home">
<div id="container">
    <header>
        @include('partials.header')
    </header>

    @yield('mainimg')

    <div id="contents">
        @yield('content')
    </div>
    <!--/#contents-->

    <ul id="footermenu">
        <li><a href="{{ route('home.index') }}">HOME</a></li>
        <li><a href="#">SERVICE</a></li>
        <li><a href="#">COMPANY</a></li>
        <li><a href="#">CONTACT</a></li>
    </ul>

    <footer>
        @include('partials.footer')
    </footer>
    
    <!--ページの上部へ戻るボタン-->
    <div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>
</div>
<!--/#container-->
<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
    <span></span><span></span><span></span>
</div>
<!--jQueryの読み込み-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!--パララックス（inview）-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="js/jquery.inview_set.js"></script>
<!--このテンプレート専用のスクリプト-->
<script src="js/main.js"></script>
@yield('scripts')

</body>
</html>