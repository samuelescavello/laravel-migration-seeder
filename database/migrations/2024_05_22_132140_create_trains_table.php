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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 255);
            $table->string('departure_station',255);
            $table->string('arrival_station',255);
            $table->string('departure_time', 255);
            $table->string('arrival_time', 255);
            $table->string('train_code', 255);
            $table->string('carriages', 255);
            $table->string('on_time', 255);
            $table->string('cancelled', 255);
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
        Schema::dropIfExists('trains');
    }
};
