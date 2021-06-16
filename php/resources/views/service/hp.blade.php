@extends('service.view')
 
@section('title', 'HawkSystem')
 
@section('content')
<main class="content">
    <div class="inner">
        <div class="title-section">
            <div class="title-header">
                <h1 class="title">あなたの事業を支援するホームページ製作</h1>
            </div>
            <div class="title-description">
                <p>ユーザからの信頼確保、集客率アップ、成約率アップ といった事業の目的・目標を達成するためには、</p>
                <p>ホームページを持つことが不可欠です。</p><br>
                <p>しかし、ホームページを自身で制作する場合、 専門的な知識、サーバの運用コストがかかってしまいます。</p><br>
                <p>私たちは、あなた様の事業目的・目標達成のために、 ホームページの制作、運営、すべてをサポート致します。</p>
            </div>
            <img class="hp-service-img" data-src="{{ asset('assets/hp-img.JPG')}}" alt="" src="{{ asset('assets/hp-img.JPG')}}">
        </div>
        <div class="support-section">
            <h2 class="support-section-header">サポート内容</h2>
                <div class="planning">
                    <h3 class="planning-header">企画・ご提案</h3>
                    <div class="planning-description">
                        <p>あなた様の事業の目的と課題を伺い、最適なホームページの構成をご提案致します。</p>
                    </div>
                    <img class="planning-img" data-src="{{ asset('assets/plannig-img.JPG')}}" alt="" src="{{ asset('assets/plannig-img.JPG')}}">
                </div>
                <div class="design">
                    <h3 class="design-header">デザイン制作</h3>
                    <div class="design-description">
                        <p>あなた様の事業目的と課題を達成するためのホームページデザインを制作致します。</p>
                        <p>必要に応じて、お問い合わせページ、資料請求ページなどの機能を制作致します。</p>
                    </div>
                    <img class="design-img" data-src="{{ asset('assets/desing-img.JPG')}}" alt="" src="{{ asset('assets/desing-img.JPG')}}">
                </div>
                <div class="coding">
                    <h3 class="coding-header">コーディング</h3>
                    <div class="coding-description">
                        <p>設計したデザインをもとにコーディングを行います。</p>
                        <p>スマートフォン向けのレスポンシブ化にも対応しております。</p>
                    </div>
                    <img class="coding-img" data-src="{{ asset('assets/coding-img.JPG')}}" alt="" src="{{ asset('assets/coding-img.JPG')}}">
                </div>
                <div class="server">
                    <h3 class="server-header">サーバ運用</h3>
                    <div class="server-description">
                        <p>24時間あなた様のホームページが載ったサーバを運用サポート致します。</p>
                        <p>また、SSL証明書設定、セキュリティ設定などもサポート致します。</p>
                    <img class="server-img" data-src="{{ asset('assets/server-img.JPG')}}" alt="" src="{{ asset('assets/server-img.JPG')}}">
                </div>
            </div>
        </div>
        <div class="contact-section">
            <h3>ホームページ制作について何かお困りでしたら、 お気軽にお問い合わせください。</h3>
            <a href="{{ url('/contact') }}" class="contact-button">
                お問い合わせ
            </a>
        </div>
    </div>
</main>
@endsection
