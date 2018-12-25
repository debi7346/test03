<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
    <body>
        <div>                               <!--登入登出操作list-->
            <ul>                            <!--登入狀態-->
                @if (session()->has('username'))
                    <li style="display:inline;"><a href="/logout"><button>登出</button></a> </li>
                    <li style="display:inline;"><a href="/sign_update"><button>更改密碼</button></a> </li>
                @else
                    <li style="display:inline;"><a href="/sign_in"><button>登入</button></a> </li>
                    <li style="display:inline;"><a href="/sign_up"><button>註冊</button></a> </li>
                @endif
            </ul>
        </div>
        <div>                               <!--網頁連結list-->
            <ul>
                <li style="display:inline;"><a href="/">首頁</a> </li>
                <li style="display:inline;"><a href="/product/1">商品</a> </li>
                <li style="display:inline;"><a href="/car">購物車</a></li>
            </ul>
        </div>
        <div>                               <!--商品list-->
            <div>
            @foreach($Pttops as $Pttop)
                    <!--印出商品ID,來呈現商品內容頁面URL連結 參照MerchandiseController@product-->
                    <a href="/product/{{ $Pttop->product_id }}">
                    <!--印出商品名字.ID 參照MerchandiseController@product-->
                        {{ $Pttop->product_name }}
                    </a>&nbsp&nbsp&nbsp&nbsp&nbsp
            <!--迴圈完畢--->
            @endforeach
            </div>
        </div>
        @section('main')
        @show
    </body>
</html>