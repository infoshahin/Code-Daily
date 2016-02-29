<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function(Blueprint $table){
            $table->increments('id');
            $table->integer('order_number');
            $table->integer('customar_id');
            $table->integer('billing_add_id');
            $table->integer('shipping_add_id');
            $table->dateTime('orderd_on');
            $table->dateTime('shipped_on');
            $table->float('grand_total');
            $table->string('status');
            $table->string('remark');
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
        Schema::dropIfExists('orders');
    }
}
