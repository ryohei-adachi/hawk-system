@extends('contact.view')
 
@section('title', 'お問い合わせ画面')
 
@section('content')

<main class="content">

    <div class="contact-header">
        <h1  class="conact-header-title-h1">
            <div class="conact-header-title" >お問い合わせ</div>
        </h1>

    </div>

    <div class="inner">
        <form method="POST" action="{{ url('/contact/confirm') }}">
            @csrf
            <div class="contact-form" >
                <div class="conact-name">
                    <div class="error-message">
                        @if ($errors->has('name'))
                            <p class="error-message">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <label>お名前</label>
                    <input name="name" value="{{ old('name') }}" type="text" class="name" size="45">
                </div>

                <div class="conact-email">
                    <div class="error-message">
                        @if ($errors->has('email'))
                            <p class="error-message">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                    <label>メールアドレス</label>
                    <input name="email" value="{{ old('email') }}" type="text" class="email" size="45">
                </div>

                <div class="conact-title">
                    <div class="error-message">
                        @if ($errors->has('title'))
                            <p class="error-message">{{ $errors->first('title') }}</p>
                        @endif
                    </div>
                    <label>題名</label>
                    <input name="title" value="{{ old('title') }}" type="text" class="title" size="45">
                </div>

                <div class="conact-body">
                    <div class="error-message">
                        @if ($errors->has('body'))
                            <p class="error-message">{{ $errors->first('body') }}</p>
                        @endif
                    </div>
                    <label>お問い合わせ内容</label>
                    <textarea name="body" rows="10" cols="60" class="body">{{ old('body') }}</textarea>

                </div>

                <div class="submit-confirm-button">
                    <button type="submit">
                        送信内容を確認する
                    </button>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection