<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <div class="header-wrapper">
            <h1><a href="index.php" class="header-logo">＊＊＊仮ロゴ</a></h1>
            <ul class="header-right">
                <li><a href="">旅記録を見る</a></li>
                <li><a href="{{ route('create1') }}">旅記録を書く</a></li>
                <li><a href="">ログイン</a></li>
                <li><a href="">新規登録</a></li>
            </ul>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <ul>
            <li><a href="">旅記録を見る</a></li>
            <li><a href="">旅記録を書く</a></li>
            <li><a href="">本サイトの作成者について</a></li>
            <li><a href="">お問い合わせ</a></li>
        </ul>
        <p class="copyright">©2022 Taiki Narita</p>
    </footer>
</body>
</html>