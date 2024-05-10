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
        Schema::create('employ_roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employ_id');
            $table->unsignedBigInteger('role_id');
            $table->timestamps();
            $table->foreign('employ_id')->references('id')->on('employs')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employ_roles');
    }
};
