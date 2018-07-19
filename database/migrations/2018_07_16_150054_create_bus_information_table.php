<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('busInformation', function (Blueprint $table) {
            $table->increments('bi_id');
            $table->string('bi_travelName', 100);
            $table->string('bi_busType', 100);
            $table->string('bi_photo');
            $table->string('bi_busNo', 50);
            $table->integer('bi_routeNo');
            $table->integer('bi_numSeat');
            $table->string('bi_departure',100);
            $table->string('bi_arrival', 100);
            $table->string('bi_time',50);
            $table->integer('bi_price');
            $table->timestamps();

            $table->foreign('bi_departure')
                ->references('bc_id')
                ->on('busCity');

            $table->foreign('bi_arrival')
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
        Schema::dropIfExists('busInformation');
    }
}
