<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('image');
            $table->string('email')->unique();
            $table->tinyInteger('email_subscribe');
            $table->string('phone', 30)->unique();
              $table->string('company')->nullable();
            $table->string('password',60);
            $table->string('addrsss_one');
            $table->string('addrsss_two');
            $table->tinyInteger('status');
            $table->tinyInteger('confirmed');

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
        //
    }
}
