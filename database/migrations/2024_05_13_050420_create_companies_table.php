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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('Name'); //company name
            $table->string('Contact_number');//company contect number
            $table->string('secondary_contact_number');//company secoundry contect number
            $table->string('Email_address');//company email adress
            $table->string('GST_number');//company GST bile number
            $table->string('Address');//company address
            $table->string('status');//company statue 
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
        Schema::dropIfExists('companies');
    }
};
