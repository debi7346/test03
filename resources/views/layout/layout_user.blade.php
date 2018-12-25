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
        <div>
            <ul>
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
        @section('main')
        @show
    </body>
</html>