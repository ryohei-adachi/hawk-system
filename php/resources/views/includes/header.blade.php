<link href="/css/header.css" rel="stylesheet">

<nav class="gnav">
    <div class="logo">
        <a href="{{ url('/index') }}">
            <img src="{{ asset('assets/logo.png')}}">
        </a>
    </div>
    <ul class="gnav-list">
        <li class="gnav-item">
            <a class="gnav-link" href="{{ url('/index') }}#service-section">サービス</a>
        </li>
        <li class="gnav-item">
            <a class="gnav-link" href="{{ url('/index') }}#misson-section">ミッション</a>
        </li>
        <li class="gnav-item">
            <a class="gnav-link" href="{{ url('/index') }}#member-section">メンバー</a>
        </li>
        <li class="gnav-item">
            <a class="gnav-link" href="{{ url('/index') }}#contact-section">お問い合わせ</a>
        </li>
    </ul>
</nav>
<!-- ハンバーガーメニュー部分 -->
<div class="drawer">
    <!-- ハンバーガーメニューの表示・非表示を切り替えるチェックボックス -->
    <input type="checkbox" id="drawer-check" class="drawer-hidden" >
    <!-- ハンバーガーアイコン -->
    <label for="drawer-check" class="drawer-open"><span></span></label>

    <!-- メニュー -->
    <nav class="drawer-content">
    <ul class="drawer-list">
        <li class="drawer-item">
            <a href="{{ url('/index') }}#service-section" onclick="checkBoxOff();">サービス</a>
        </li><!-- /.drawer-item -->
        <li class="drawer-item">
            <a href="{{ url('/index') }}#misson-section" onclick="checkBoxOff();">ミッション</a>
        </li><!-- /.drawer-item -->
        <li class="drawer-item">
            <a href="{{ url('/index') }}#member-section" onclick="checkBoxOff();">メンバー</a>
        </li><!-- /.drawer-item -->
        <li class="drawer-item">
            <a href="{{ url('/index') }}#contact-section" onclick="checkBoxOff();">お問い合わせ</a>
        </li><!-- /.drawer-item -->
    </ul><!-- /.drawer-list -->
    <script src="{{ asset('/js/header.js') }}"></script>
</div>

