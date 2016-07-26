<?php

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
            $table->integer('pay');
            $table->integer('status');
            $table->string('up_place');
            $table->string('down_place');
            $table->integer('user_id');
            $table->integer('car_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('car_id')->references('id')->on('car_status');
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
