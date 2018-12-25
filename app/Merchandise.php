<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchandise extends Model
{
    protected $files =[
        'product_id'        //商品id

        ,'product_name'     //商品名稱

        ,'product_price'    //商品價錢

        ,'product_stock'    //商品庫存

        ,'product_describe' //商品描述
        ,'product_imgage'   //商品圖片連結
];}
