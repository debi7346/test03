<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Test;
use Hash;
use DB;
use Session;


class MerchandiseController extends Controller
{
    public function __construct()
    {
        $this->middleware('logincheck');
    }
    public function Productcontent(Request $request , $id)
    {                                                   //用來撈取web.php 路由轉至商品{id}//撈取 資料表merchandises 的欄位
        $Pttops = DB::table('merchandises')->get();
        $Ptdatas = DB::table('merchandises')->where(['product_id'=>$id])->get();
        return view('product_',[                        //回傳$Ptdatas至view  用於呈現商品資訊 layout_product需使用＄Pttops
            'Ptdatas'=>$Ptdatas
            ,'id' => $id
            ,'Pttops'=>$Pttops                          //用來呈現商品列表
        ]);
    }
    public function car(){
        $datas = DB::table('cars')->get();
        return $datas;
    }
}
