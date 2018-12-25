@extends('layout.layout_user')
@section('main')
<form action="/Update" method="post">
@csrf
    <div>
        輸入使用者密碼: <input type="password" name = "Password" placeholder="請輸入使用者密碼">
    </div>
    <div>
        新的使用者密碼: <input type="password" name = "NewPassword">
    </div>
    <div>
        再次輸入新密碼: <input type="password" name = "CheckNewPassword">
    </div>
    <div>
        <button>送出</button>
    </div>
</form>
@endsection