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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id'); // Foreign key referencing the id of the company in the companies table
            $table->string('employee_id')->unique(); // Unique identifier for the employee
            $table->string('Name'); // Name of the employee
            $table->string("Age"); // Age of the employee
            $table->string("designation"); // Designation of the employee
            $table->string('address'); // Address of the employee
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade'); // Establishing foreign key constraint with cascading deletion
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
        Schema::dropIfExists('employees');
    }
};
