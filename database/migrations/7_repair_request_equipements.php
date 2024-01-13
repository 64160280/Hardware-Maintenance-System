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
        Schema::create('repair_request_equipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('level_issue')->nullable();
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('users')->nullable();
            $table->dateTime('date_announce');
            $table->integer('status');
            $table->integer('it_id')->unsigned();
            $table->foreign('it_id')->references('id')->on('users')->nullable();
            $table->string('picture_path');
            $table->integer('amount_request')->nullable();
            $table->string('issue')->nullable();
            $table->string('details')->nullable();
            $table->string('cause_issue')->nullable();
            $table->string('reason_not_approve')->nullable();
            $table->integer('it_point')->nullable();
            $table->integer('equipement_id')->unsigned();
            $table->foreign('equipement_id')->references('id')->on('equipments');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
