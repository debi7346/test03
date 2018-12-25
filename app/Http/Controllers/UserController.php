<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Test;
use Hash;
use DB;


use Session;
class UserController extends Controller
{



//----------------------------------------------------------------------

     public function logup(Request $request)                                           //註冊功能->新增user資料到表單
     {

          $validatedData = $request->validate(
               [                                      //驗證使用者輸入資訊
               'name' => 'required|unique:tests|min:4|max:6',                        //unique連線資料表tests,不可重複
               'password' => 'required|min:4|max:8',
               ]);
          $input = $request->all();                                                  //讀取使用者表單資料存入$input
          Test::create($input);                                                      //增加至Ｔest資料表
          return view('/sign_in') ;
     }
     public function login(Request $request)
     {
          $password = $request->input('password');                                  //抓取使用者輸入帳號密碼
          $name = $request->input('name');
          $data = Test::where(['name'=>$name,'password'=>$password])->get(); //比對是否有這個使用者
          if ($data->count() != '')                                                 //count() 比對dataa資料筆數  若有
          {
               Session::push('username', $name);                                    //存入session
               $name =Session::get('username', '無使用者');                         //若無資料則顯示無使用者
               return  view('Backstage',
                    [
                         'name'=> $name
                    ]
               );
          }
          else
          {
               echo "帳號或密碼輸入錯誤";
               return  view("sign_in");
          }
     }
     public function logout(Request $request)
     {
          Session::forget('username');                                           //清空Session 'username'欄位
          $name =Session::get('username');
          return view('SPindex',
               [
                    'name'=>$name                                               //登出後回到頁面顯示遊客
               ]
          );
     }
     public function Update(Request $request)
     {
          $name = $request->input('userpassword');
          $newpassword = $request->input('password');
          $checkpassword = $request->input('password_confirmation');
          $username  = Session::get('username');                 //讀取使用者名稱來取得使用者密碼比對
          $datas =Test::where(['name'=>$username])->get();
          if($datas[0]->password == $name && $newpassword == $checkpassword)    //如果資料庫密碼＝輸入密碼  和新密碼與二次確認密碼都成立
          {
               Test::where(['name'=>$username])->update(['password'=>$newpassword]); //修改 password欄位
               echo "更新成功";
               return  view("sign_update");
          }
          else
          {
               echo "使用者密碼輸入錯誤";
               return  view("sign_update");
          }
     }
     /**
      *跳轉至首頁
      */
     public function index(Request $request)
     {
          $name =Session::get('username');
          return view('Spindex',
               [
                    'name'=>$name
               ]
          );
     }

     /**
      * 跳至 註冊頁面
      */
     public function sign_up()
     {
          return view('sign_up',
               [
               ]
          );
     }

     /**
      * 跳至 登入頁面
      */

     public function sign_in()
     {
          return view('sign_in',
               [
               ]
          );
     }

     /**
      * 跳至 登出頁面
      */

     public function sign_out()
     {
          $name =Session::get('username');                               //若無資料則顯示無使用者
               return  view('SPindex',
                    [
                         'name'=> $name,                                 //view印出登入的使用者名稱
                    ]
               );
     }
     /**
      * 跳至 重設密碼頁面
      */
     public function sign_update(Request $request)
     {
     return view('sign_update');
     }

}
//@if(session('cf') == 1)


