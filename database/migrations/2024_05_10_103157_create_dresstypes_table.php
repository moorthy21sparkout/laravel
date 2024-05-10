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
        Schema::create('dresstypes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Dresses_id');
            $table->string('Name');
            $table->foreign('dresses_id')->references('id')->on('Dresses')->onDelete('cascade');
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
        Schema::dropIfExists('dresstypes');
    }
};
