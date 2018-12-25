<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->string('product_name');            //購買的商品名稱
            $table->integer('product_id');             //購買的商品ID
            $table->integer('product_price');          //購買的商品價錢
            $table->integer('quantity');               //購買的商品的的數量
            $table->integer('total');                  //總共購買的價錢
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
