<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //新增資料欄位至 merchandises資料表
        Schema::create('merchandises', function (Blueprint $table) {
            $table->increments('product_id');           //商品id
            $table->string('product_name');             //商品名稱
            $table->integer('product_price');           //商品價錢
            $table->integer('product_stock');           //商品庫存
            $table->string('product_describe',255);     //商品描述
            $table->string('product_image',255);        //商品圖片連結
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchandises');
    }
}
