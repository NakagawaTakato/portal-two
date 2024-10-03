@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="confirm-form">
  <h2 class="confirm-form__heading content__heading">Confirm</h2>
  <div class="confirm-form__inner">
    <form action="/send" method="post">
      @csrf
      <table class="confirm-form__table">
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お名前</th>
          <td class="confirm-form__data">{{ $contacts['name'] }}</td>
          <input type="hidden" name="name" value="{{ $contacts['name'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">メールアドレス</th>
          <td class="confirm-form__data">{{ $contacts['email'] }}</td>
          <input type="hidden" name="email" value="{{ $contacts['email'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">建物名</th>
          <td class="confirm-form__data">{{ $contacts['title'] }}</td>
          <input type="hidden" name="title" value="{{ $contacts['title'] }}">
        </tr>
        <tr class="confirm-form__row">
          <th class="confirm-form__label">お問い合わせ内容</th>
          <td class="confirm-form__data">{{ $contacts['detail'] }}</td>
          <input type="hidden" name="detail" value="{{ $contacts['detail'] }}">
        </tr>
      </table>
      <div class="confirm-form__btn-inner">
        <input class="confirm-form__send-btn btn" type="submit" value="送信" name="send">
        <input class="confirm-form__back-btn" type="submit" value="修正" name="back">
      </div>
    </form>
  </div>
</div>
@endsection