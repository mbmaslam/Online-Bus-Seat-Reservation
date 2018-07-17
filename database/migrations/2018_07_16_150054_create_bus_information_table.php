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
            $table->integer('bi_Id');
            $table->string('bi_Name', 100);
            $table->integer('bi_NumSeat');
            $table->string('bi_FromCity', 100);
            $table->string('bi_ToCity', 100);
            $table->integer('bi_Price');
            $table->timestamps();

            $table->foreign('bi_FromCity')
                ->references('bc_Id')
                ->on('busCity');

            $table->foreign('bi_ToCity')
                ->references('bc_Id')
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
