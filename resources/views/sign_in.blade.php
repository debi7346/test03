@extends('layout.layout_user')
@section('main')
    <div>
        <form action="/login" method="post">
            @csrf
            <div>帳號：<input type="text" name="name"></div>
            <div>密碼：<input type="password" name="password"></div>
            <button><input type="button" value="登入" > </div></button>
        </form>
    </div>
    <div>
        <!---驗證輸入資料的錯誤訊息-->
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    @endsection