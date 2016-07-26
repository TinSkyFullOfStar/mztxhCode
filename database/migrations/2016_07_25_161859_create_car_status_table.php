<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_status', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('departure');
            $table->string('up_place');
            $table->integer('admin_id');
            $table->timestamps();
            $table->foreign('admin_id')->reference('id')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('car_status');
    }
}
