@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiry.css') }}">
@endsection

@section('content')
<div class="container">
    <header class="container-always_header">
        <ul class="container-always_header-ul">
            <li class="container-always_header-li"><div class="container-group-text_one">iMPRESS Inc</div></li>
            <li class="container-always_header-li"><a href="/" class="container-group-text_two">ホーム</a></li>
            <li class="container-always_header-li"><a href="https://www.imprex.co.jp/product_ifusion" class="container-group-text_three" target="_blank" rel="noopener noreferrer">会社情報</a></li>
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
                    <li class="container-always_header-nav-ul-li"><div class="container-always_header-nav-ul-li-text_last">{{ Auth::user()->name }}</div></li>
                </ul>
            @else
                <div><a href="/login" class="container-box-login">ログイン</a></div>
            @endif
        </nav>

    </header>
    <form action="confirm" method="post">
        @csrf
        <div class="container-box">

            <main class="container-box-main">
                
                <h2 class="container-box-main-h2"><span class="container-box-main-h2-span">お問い合わせ</span></h2>
                
                <section class="container-box-main-section_one">
                    <label class="contact-form__label" for="name">お名前（必須）</label>
                    <input class="contact-form__input" type="text" name="name" id="name"value="{{ old('name') }}" placeholder="例：山田">
                    <p class="contact-form__error-message">
                        @error('name')
                        {{ $message }}
                        @enderror
                    </p>
                </section>

                <section class="container-box-main-section_two">
                    <label class="contact-form__label" for="email">メールアドレス（必須）</label>
                    <input class="contact-form__input" type="email" name="email" id="email" value="{{ old('email') }}"
                    placeholder="例：test@example.com">
                    <p class="contact-form__error-message">
                        @error('email')
                        {{ $message }}
                        @enderror
                    </p>
                </section>

                <section class="container-box-main-section_three">
                    <label class="contact-form__label" for="title">題名（必須）</label>
                    <input class="contact-form__input" type="text" name="title" id="title" value="{{ old('title') }}"
                    placeholder="例：千駄ヶ谷マンション101">
                </section>

                <section class="container-box-main-section_four">
                    <label class="contact-form__label" for="detail">メッセージ本文（必須）</label>
                    <textarea class="contact-form__textarea" name="detail" id="" cols="30" rows="10"
                    placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                    <p class="contact-form__error-message">
                        @error('detail')
                        {{ $message }}
                        @enderror
                    </p>
                </section>

            </main>
        </div>

        <input class="contact-form__btn btn" type="submit" value="送信">
    </form>

    <footer class="container-always_footer">
        <p>Copyright &copy; 2024 iMPRESS Inc.</p>
    </footer>


</div>

@endsection

