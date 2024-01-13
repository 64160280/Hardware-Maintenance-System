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
        Schema::create('device_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('device_type');
            $table->integer('repair_id')->unsigned();
            $table->foreign('repair_id')->references('id')->on('repair_types');
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
