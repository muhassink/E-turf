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
        Schema::create('turfbookings', function (Blueprint $table) {
            $table->id();
            $table->string('turf_id');
            $table->string('nameturf');
            $table->string('description');
            $table->string('location');
            $table->string('price');
            $table->string('date');
            $table->string('time');
            $table->string('user_id');
            $table->string('status')->default("pending");
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
        Schema::dropIfExists('turfbookings');
    }
};
