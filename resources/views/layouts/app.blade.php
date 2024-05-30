<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ __('messages.description_home_index') }}">
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

        @include('partials.footermenu')
        <footer>
            @include('partials.footer')
        </footer>

        @include('partials.pagetop')
    </div>
    @include('partials.menubar_hdr')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <script src="js/jquery.inview_set.js"></script>
    <script src="js/main.js"></script>
    @yield('scripts')
</body>
</html>
