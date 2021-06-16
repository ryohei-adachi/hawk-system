@extends('home.view')
 
@section('title', 'HawkSystem')
 
@section('content')

<!---------------------------- TITLE---------------------------------->
<header class="title-section" id="title-section">
    <h1 class="title">
        <div class="logo-title">想像を形にしてサービスを創る</div>
    </h1>
</header>
<!---------------------------- Main---------------------------------->
<main class="content">
    <!----------------------------Service Section---------------------------------->
    <section class="service-section section" id="service-section">
        <div class="inner">
            <div class="section-heading">
                <h2 class="heading-primary">Service</h2>
                <h3 class="heading-secondary">サービス</h3>
            </div>
            <div class="service-section-product">
		<a href="{{ url('/hp-service') }}">
                    <div class="service-section-hp">
                    	<img class="hp-img" data-src="{{ asset('assets/product02_2.png')}}" alt="" src="{{ asset('assets/product02_2.png')}}">
                    	<h5 class="service-section-hp-heading">ホームページ製作</h5>
                    	<p class="service-section-hp-description">
                    	ホームページのデザイン、コーディング、サーバ運用まで行っております。
		    	</p>
		    </div>
                    <div class="mask">
		    	<div class="caption">Click</div>
	            </div>
                </a>
                <div class="service-section-line">
                    <img class="line-img" data-src="{{ asset('assets/product01_2.png')}}" alt="" src="{{ asset('assets/product01_2.png')}}">
                    <h5 class="service-section-line-heading">LINEアプリ開発</h5>
                    <p class="service-section-line-description">
		    Lineを使ったアプリケーション開発を行っております。
                    </p>
                </div>
                <div class="service-section-smartphone">
                    <img class="smartphone-img" data-src="{{ asset('assets/product03_2.png')}}" alt="" src="{{ asset('assets/product03_2.png')}}"> 
                    <h5 class="service-section-smartphone-heading">スマホアプリ開発</h5>
                    <p class="service-section-smartphone-description">
                    Android、iOSアプリの開発を行っております。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /service-section -->
    <!----------------------------Misson Section---------------------------------->
    <section class="misson-section section" id="misson-section">
        <div class="inner">
            <div class="section-heading">
                <h2 class="heading-primary">Misson</h2>
                <h3 class="heading-secondary">ミッション</h3>
            </div>
            <div class="misson-section-sentence">
                <h2 class="misson">企業や個人にとって、感動のあるサービスを提供し続けます</h2>
            </div>
        </div>
    </section>
    <!-- /misson-section -->
    <!----------------------------Member Section---------------------------------->
    <section class="member-section section" id="member-section">
        <div class="inner">
            <div class="section-heading">
                <h2 class="heading-primary">Member</h2>
                <h3 class="heading-secondary">メンバー</h3>
            </div>
            <div class="section-body-member">
                <div class="member-item">
                    <div class="member-image-wrapper">
                        <img class="member-img" data-src="{{ asset('assets/profile_yamada.jpg')}}" alt="" src="{{ asset('assets/profile_yamada.jpg')}}">
                    </div>
                    <div class="member-name">山田 将人/Yamada Masato</div>
                    <div class="member-body">
                        <p>業界No1の貿易システム会社で数年間の勤務後、独立してフリーランスエンジニアへ。</p>
                        <p>趣味はフットサル、カラオケや料理など多岐にわたる。</p>
                        <p>生粋の大阪人だが、あまり関西人っぽくないねと言われるのが悩み</p>
                    </div>
                    <div class="member-image-wrapper">
                        <img class="member-img" data-src="{{ asset('assets/profile_hanaoka.jpg')}}" alt="" src="{{ asset('assets/profile_hanaoka.jpg')}}">
                    </div>
                    <div class="member-name">花岡 和也/Hanaoka Kazuya</div>
                    <div class="member-body">
                        <p>自身で複数会社を所有しビジネスを展開しております。</p>
                        <p>エンジニア経験はないが、システム開発に興味と感動を覚え自分で開発したいという思いからスタート。</p>
                        <p>大事にしていることは「どのような相手でも敬意を持って接する」という事です。</p>
                    </div>
                    <div class="member-image-wrapper">
                        <img class="member-img" data-src="{{ asset('assets/profile3.jpg')}}" alt="" src="{{ asset('assets/profile3.jpg')}}">
                    </div>
                    <div class="member-name">安達 遼平/Adachi Ryohei</div>
                    <div class="member-body">
                        <p>個人事業主 / ITエンジニア</p>
                        <p>大手上場企業のインフラエンジニアとして、4年間のサーバ・ネットワーク運用管理の経験を持つ。</p>
                        <p>現在は、インフラ周辺だけでなく、アプリケーション開発にも携わっている。</p>
                    </div>
                </div>
            </div>
        </div>            
    </section>
    <!-- /member-section -->
    <section class="contact-section section" id="contact-section">
        <div class="inner">
            <div class="section-heading">
                <h2 class="heading-primary">Contact</h2>
                <h3 class="heading-secondary">お問い合わせ</h3>
            </div>
            <div class="contact-section-about">
                <h4>ご相談・お問い合わせは、こちらから受け付けております。</h4>
            

                <a href="{{ url('/contact') }}" class="contact-button">
                お問い合わせ
                </a>
            </div>
        </div>
    </section>
</main>
@endsection
