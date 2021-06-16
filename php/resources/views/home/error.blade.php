@extends('home.view')
 
@section('title', 'HawkSystem')
 
@section('content')
<main class="content">

    <div class="error">
        <h2>問題が発生しました。</h2>
        <h3>申し訳ありませんが、ホーム画面に戻ってもう一度お試しください。</h3>
        <div class="back-home">
            <a href="{{ url('/index') }}">ホームに戻る</a>
        </div>
    </div>

</main>

@endsection