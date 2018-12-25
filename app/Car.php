<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $files =
    [
        'id',               
        'product_id'        //購物車中的商品id

        ,'product_name'     //購物車中的商品名稱

        ,'product_price'    //購物車中的商品價錢

        ,'quantity'    //購物車中的商品數量

        ,'total' //購物車中總共的金額
    ];
}
