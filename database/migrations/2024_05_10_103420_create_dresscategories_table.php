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
        Schema::create('dresscategories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Dresstypes_id');
            $table->string('categoryname');
            $table->foreign('Dresstypes_id')->references('id')->on('Dresstypes')->onDelete('cascade');
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
        Schema::dropIfExists('dresscategories');
    }
};
