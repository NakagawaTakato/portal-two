@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/inquiryList.css') }}">
@endsection

@section('content')
<table class="admin__table">
    <tr class="admin__row">
    <th class="admin__label">お名前</th>
    <th class="admin__label">性別</th>
    <th class="admin__label">メールアドレス</th>
    <th class="admin__label">お問い合わせの種類</th>
    <th class="admin__label"></th>
    </tr>
    <tr class="admin__row">
    <td class="admin__data">{{$contact->first_name}}{{$contact->last_name}}</td>
    <td class="admin__data">
        @if($contact->gender == 1)
        男性
        @elseif($contact->gender == 2)
        女性
        @else
        その他
        @endif
    </td>
    <td class="admin__data">{{$contact->email}}</td>
    <td class="admin__data">{{$contact->category->content}}</td>
    <td class="admin__data">
        <a class="admin__detail-btn" href="#{{$contact->id}}">詳細</a>
    </td>
    </tr>

    <div class="modal" id="{{$contact->id}}">
    <a href="#!" class="modal-overlay"></a>
    <div class="modal__inner">
        <div class="modal__content">
        <form class="modal__detail-form" action="/delete" method="post">
            @csrf
            <div class="modal-form__group">
            <label class="modal-form__label" for="">お名前</label>
            <p>{{$contact->first_name}}{{$contact->last_name}}</p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">性別</label>
            <p>
                @if($contact->gender == 1)
                男性
                @elseif($contact->gender == 2)
                女性
                @else
                その他
                @endif
            </p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">メールアドレス</label>
            <p>{{$contact->email}}</p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">電話番号</label>
            <p>{{$contact->tell}}</p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">住所</label>
            <p>{{$contact->address}}</p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">お問い合わせの種類</label>
            <p>{{$contact->category->content}}</p>
            </div>

            <div class="modal-form__group">
            <label class="modal-form__label" for="">お問い合わせ内容</label>
            <p>{{$contact->detail}}</p>
            </div>
            <input type="hidden" name="id" value="{{ $contact->id }}">
            <input class="modal-form__delete-btn btn" type="submit" value="削除">

        </form>
        </div>

        <a href="#" class="modal__close-btn">×</a>
    </div>
    </div>
</table>
@endsection

