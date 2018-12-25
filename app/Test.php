<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['id','name','password'];         //限定只能操作資料庫這些欄位
}
