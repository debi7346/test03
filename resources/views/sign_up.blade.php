
@extends('layout.layout_user')
@section('main')
<form action="/sign-up" method="post">
@csrf
    <div>請輸入帳號：<input type="text" name="name" placeholder="請輸入4-6字元帳號" ></div>
    <div>請輸入密碼：<input type="password" name= "password" placeholder="請輸入4至8位元密碼"></div>
    <div><button>註冊</button></div>
</form>
    <div>若已有帳號請從此登入<a href="/sign_in"><button>登入</button></a></div>
    <div class="notification is-danger">
    <!--驗證輸入資料的錯誤訊息-->
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