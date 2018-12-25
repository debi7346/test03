<?php

namespace App\Http\Middleware;

use Closure;

class Logincheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->session()->has('username')) {     //如果 session裡沒有username的資料 就自動跳轉至登入
            return $next($request);                     //商品頁皆需登入才能瀏覽
        }
        else
        {
            return  redirect("sign_in");
        }
    }
}
