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
        Schema::create('bikemodels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bikecomponies_id');
            $table->string('bike_models');
            $table->foreign('bikecomponies_id')->references('id')->on('bikecomponies')->onDelete('cascade');
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
        Schema::dropIfExists('bikemodels');
    }
};
