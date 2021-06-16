@extends('contact.view')
 
@section('title', 'お問い合わせ完了')
 
@section('content')
<main class="content">

    <div class="mail-send-finish">
        <h2>お問い合わせありがとうございました。</h2>
        <h3>メール送信が完了しました。</h3>
        <h3>目安として、1週間以内に返答致します。</h3>

        <div class="back-home">
            <a href="{{ url('/index') }}">ホームに戻る</a>
        </div>

    </div>

</main>
@endsection
