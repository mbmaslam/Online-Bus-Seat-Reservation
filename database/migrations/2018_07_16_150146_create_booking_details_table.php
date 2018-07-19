<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingDetails', function (Blueprint $table) {
            $table->increments('bd_id');
            $table->integer('u_id');
            $table->integer('bi_id');
            $table->date('bd_dateTravel');
            $table->string('bd_departure',100);
            $table->string('bd_arrival', 100);
            $table->integer('bd_numSeat');
            $table->string('bd_time',50);
            $table->integer('bd_price');
            $table->string('status',50);
            $table->timestamps();

            $table->foreign('u_id')
                ->references('u_id')
                ->on('users');

            $table->foreign('bi_id')
                ->references('bi_id')
                ->on('busInformation');

            $table->foreign('bd_departure')
                ->references('bc_id')
                ->on('busCity');

            $table->foreign('bd_arrival')
                ->references('bc_id')
                ->on('busCity');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookingDetails');
    }
}
