<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userID');
            $table->integer('productID');
            $table->integer('quantity');
            $table->integer('total');
            $table->integer('paymentID');
            $table->integer('billID');
            $table->integer('shipID');
            $table->string('orderDate');
            $table->string('shipDate');
            $table->string('orderStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
