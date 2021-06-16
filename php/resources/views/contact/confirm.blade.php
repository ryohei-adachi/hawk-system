@extends('contact.view')
 
@section('title', '確認画面')
 
@section('content')
<main class="content">

    <div class="contact-header">
        <h1  class="conact-header-title-h1">
            <div class="conact-header-title" >確認画面</div>
        </h1>
    </div>
    <div class="inner">
        <form method="POST" action="{{ url('/contact/send') }}">
            @csrf
            <div class="contact-form" >
                <div class="question"> 
                    <h2>以下の内容で送信してよろしいですか？</h2>
                </div>
                <div class="conact-name">
                    <label>お名前</label>
                        <div class="confirm-item">
                        {{ $inputs['name'] }}
                        </div>
                    <input name="name" value="{{ $inputs['name'] }}" type="hidden">
                </div>

                <div class="conact-email">
                    <label>メールアドレス</label>
                        <div class="confirm-item">
                        {{ $inputs['email'] }}
                        </div>
                    <input name="email" value="{{ $inputs['email'] }}" type="hidden">
                </div>

                <div class="conact-title">
                    <label>題名</label>
                        <div class="confirm-item">
                        {{ $inputs['title'] }}
                        </div>
                    <input name="title" value="{{ $inputs['title'] }}" type="hidden">
                </div>

                <div class="conact-body">
                    <label>お問い合わせ内容</label>
                        <div class="confirm-item">
                        {!! nl2br(e($inputs['body'])) !!}
                        </div>
                    <input name="body" value="{{ $inputs['body'] }}" type="hidden">
                </div>
                <div class="submit-button">
                    <div class="submit-back-button">
                        <button type="submit" name="action" value="back">
                        入力内容修正
                        </button>
                    </div>
                    <div class="submit-send-button">
                        <button type="submit" name="action" value="submit">
                        送信する
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

@endsection