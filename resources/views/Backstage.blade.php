    @extends('layout.layout_user')
    @section('main')
        <div>
            {{ $name[0] }} <!--印出登入中的使用者名字-->
        </div>
        <div>
            <a href="/logout"><button>登出</button></a>
        </div>
    @endsection