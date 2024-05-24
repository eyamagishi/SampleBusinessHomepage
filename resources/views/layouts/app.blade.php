<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Laravelの勉強のために作成したサンプルサイトです。">
    @yield('meta')
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
    <ul id="footermenu">
        <li><a href="{{ route('home.index') }}">{{ __('messages.home') }}</a></li>
        <li><a href="#">{{ __('messages.service') }}</a></li>
        <li><a href="#">{{ __('messages.company') }}</a></li>
        <li><a href="#">{{ __('messages.contact') }}</a></li>
    </ul>
    <footer>
        @include('partials.footer')
    </footer>
    <div class="pagetop"><a href="#"><i class="fas fa-angle-double-up"></i></a></div>
</div>
<!--/#container-->
<!--開閉ボタン（ハンバーガーアイコン）-->
<div id="menubar_hdr">
    <span></span><span></span><span></span>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="js/jquery.inview_set.js"></script>
<script src="js/main.js"></script>
@yield('scripts')
</body>
</html>