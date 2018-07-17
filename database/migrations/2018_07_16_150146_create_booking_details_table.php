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
            $table->increments('bd_Id');
            $table->integer('u_Id');
            $table->integer('bi_Id');
            $table->date('bd_DateTravel');
            $table->string('customerFromCity',100);
            $table->string('customerToCity',100);
            $table->integer('bd_NumSeat');
            $table->integer('bd_Price');
            $table->string('status',50);
            $table->timestamps();

            $table->foreign('u_Id')
                ->references('u_Id')
                ->on('users');

            $table->foreign('bi_id')
                ->references('bi_id')
                ->on('busInformation');

            $table->foreign('customerFromCity')
                ->references('bc_Id')
                ->on('buscity');

            $table->foreign('customerToCity')
                ->references('bc_Id')
                ->on('buscity');

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
