<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('history_repair_requests', function (Blueprint $table) {
            $table->increments('id');
            $table->dateTime('date')->nullable();
            $table->integer('repair_request_equipment_id')->unsigned();
            $table->foreign('repair_request_equipment_id')->references('id')->on('repair_request_equipments');
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
};
