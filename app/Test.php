<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['id','name','password','created_at','updated_at'];         //限定只能操作資料庫這些欄位
}
