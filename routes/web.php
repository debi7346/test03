<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'UserController@index');
//測試功能
/*
Route::get('/select','UserController@select');
Route::get('/inser','UserController@inser');
Route::get('/update','UserController@update');
Route::get('/delete','UserController@delete');*/


/**
 * 頁面用途
 */

    //return view('SPindex', ['value' => '大帥哥']);





/**
 *  使用者 user頁面跳轉
 */
Route::get('/SPindex','UserController@index');//轉至首頁
Route::get('/sign_up','UserController@sign_up');//轉至註冊
Route::get('/sign_in','UserController@sign_in');//轉至登入
Route::get('/sign_update','UserController@sign_update');//轉至重設密碼
//Route::get('/sign_update','UserController@sign_update');

/**
 *  商品 Merchandise 頁面跳轉
 */
Route::get('/product/{id}','MerchandiseController@Productcontent');//轉至商品
//----------------------------------------------------------------------

Route::get('/1234','UserController@fff');
/*
*   使用者 user功能用途
*/
Route::post('/sign-up','UserController@logup');//註冊表單->新增使用者
Route::post('/login','UserController@login');//登入表單->登入＆驗證
Route::post('/Update','UserController@Update');//更改密碼
Route::get('/logout','UserController@logout');//登出使用者->刪除Session並登出


/**
 *  商品 Merchandise功能用途
 */

