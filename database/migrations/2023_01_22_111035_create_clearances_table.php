<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clearances', function (Blueprint $table) {
            $table->id();
            $table->string('businessName')->nullable();
            $table->string('purpose');
            $table->string('isRegistered');
            $table->string('havePendingCase');
            $table->string('name');
            $table->string('gender');
            $table->string('birthdate');
            $table->string('p_birth');
            $table->string('nationality');
            $table->string('contact_num');
            $table->string('c_status');
            $table->integer('addressNo')->nullable();
            $table->string('street')->nullable();
            $table->integer('addressZone')->nullable();
            $table->string('businessAddress')->nullable();
            $table->string('provincialAddress')->nullable();
            $table->string('yearLiving');
            $table->string('areYouSure');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('clearances');
    }
}
