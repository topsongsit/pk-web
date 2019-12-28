<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabletimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabletimes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('booking_id')->unsigned();
            $table->foreign('booking_id')
                ->references('id')
                ->on('bookings')
                ->onDelete('cascade');
            $table->integer('day_id')->unsigned();
            $table->foreign('day_id')
                ->references('id')
                ->on('days')
                ->onDelete('cascade');
            $table->integer('status_id')->unsigned();
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses')
                ->onDelete('cascade');
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
        Schema::dropIfExists('tabletimes');
    }
}
