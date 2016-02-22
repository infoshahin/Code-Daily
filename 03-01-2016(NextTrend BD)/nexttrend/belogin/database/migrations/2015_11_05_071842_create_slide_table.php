<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlideTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('details');
            $table->string('iamge');
            $table->string('link');
            $table->integer('sequence');
            $table->tinyInteger('status');
            $table->tinyInteger('new_window');
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
        Schema::dropIfExists('slider');
    }
}
