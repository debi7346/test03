@extends('layout.layout_user')
@section('main')
<form action="/Update" method="post">
@csrf
    <div>
        輸入使用者密碼: <input type="password" name = "userpassword" placeholder="請輸入使用者密碼">
    </div>
    <div>
        新的使用者密碼: <input type="password" name = "password" placeholder = "請輸入新密碼">
    </div>
    <div>
        再次輸入新密碼: <input type="password" name = "password_confirmation" placeholder="請再次輸入新密碼" >
    </div>
    <div>
        <button>送出</button>
    </div>
    <div>
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
</form>
@endsection