<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="/css/homepage.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"> 
</head>
<body>
<!-- ヘッダー -->
@include('includes.header')

<!-- コンテンツ -->
@yield('content')

<!-- フッター -->   
@include('includes.footer')

</body>
</html>