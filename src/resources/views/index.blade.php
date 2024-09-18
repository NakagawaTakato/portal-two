@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="container">
    <header class="container-always_header">
        <ul class="container-always_header-ul">
            <li class="container-always_header-li"><a href="/shop_all" class="container-group-text_one">iMPRESS Inc</a></li>
            <li class="container-always_header-li"><a href="/register" class="container-group-text_two">ホーム</a></li>
            <li class="container-always_header-li"><a href="/login" class="container-group-text_three">会社情報</a></li>
            <li class="container-always_header-li"><a href="/login" class="container-group-text_four">お問い合わせ</a></li>
        </ul>
        <nav>
           @if( Auth::check() )
                <ul class="container-always_header-nav-ul">
                    <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">サービス</a></li>
                    <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">お問い合わせ</a></li>
                    <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text">ユーザー</a></li>
                    <form class="container-always_header-nav-ul-li" action="/logout" method="post">
                        @csrf
                        <input class="container-always_header-nav-ul-form-text" type="submit" value="ログアウト">
                    </form>
                    <li class="container-always_header-nav-ul-li"><a href="/" class="container-always_header-nav-ul-li-text_last">aaa</a></li>
                </ul>
            @else

            @endif
        </nav>

    </header>

    <div class="container-box">
        <div><a href="/login" class="container-box-login">login</a></div>

        <main class="container-box-main">
            
            <h2 class="container-box-main-h2">iMPRESS AI Portal site</h2>
            <div class="container-box-main-background"></div>
            
            <div class="container-box-search">
                <input type="container-box-search-text"></input>
                <input class="container-box-search-btn" type="submit" value="検索">
            </div>

            <section class="container-box-main-section_one">
                <img class="container-box-main-section-img" src="{{ asset('img/roboimage_last.png') }}" alt="">
                <h3 class="container-box-main-h3">iMPRESS-AI Chatbot</h3>
                <p class="container-box-main-text">iMPRESSパッケージユーザー様向けの</br>ユーザーサポートチャットボットです</p>
            </section>

            <section class="container-box-main-section_two">
                <img class="container-box-main-section-img" src="img/roboimage_sub.png" alt="">
                <h3 class="container-box-main-h3">Chatbot for guest</h3>
                <p class="container-box-main-text">ゲストユーザー様にiMPRESSの製品情報</br>などを私が詳しくご案内いたします！</p>
            </section>

            <section class="container-box-main-section_three">
                <img class="container-box-main-section-img" src="img/roboimage_sub.png" alt="">
                <h3 class="container-box-main-h3">Chatbot for guest</h3>
                <p class="container-box-main-text">ゲストユーザー様にiMPRESSの製品情報</br>などを私が詳しくご案内いたします！</p>
            </section>

            <section class="container-box-main-section_four">
                <img class="container-box-main-section-img" src="{{ asset('img/roboimage_last.png') }}" alt="">
                <h3 class="container-box-main-h3">iMPRESS-AI Chatbot</h3>
                <p class="container-box-main-text">iMPRESSパッケージユーザー様向けの</br>ユーザーサポートチャットボットです</p>
            </section>

            <section class="container-box-main-section_five">
                <img class="container-box-main-section-img" src="img/roboimage_sub.png" alt="">
                <h3 class="container-box-main-h3">Chatbot for guest</h3>
                <p class="container-box-main-text">ゲストユーザー様にiMPRESSの製品情報</br>などを私が詳しくご案内いたします！</p>
            </section>

            <section class="container-box-main-section_six">
                <img class="container-box-main-section-img" src="img/roboimage_sub.png" alt="">
                <h3 class="container-box-main-h3">Chatbot for guest</h3>
                <p class="container-box-main-text">ゲストユーザー様にiMPRESSの製品情報</br>などを私が詳しくご案内いたします！</p>
            </section>

            <div class="container-box-main-selct">
                <div class="container-box-main-selct-before">前へ</div>
                <div class="container-box-main-selct-value">1</div>
                <div class="container-box-main-selct-next">次へ</div>
            </div>

        </main>


    </div>

    <footer class="container-always_footer">
        <p>Copyright &copy; 2024 iMPRESS Inc.</p>
    </footer>


</div>

<script>

</script>
@endsection

