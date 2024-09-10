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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Student's name
            $table->string('email')->unique(); // Student's email with a unique constraint
            $table->string('mobile_number'); // Student's mobile number
            $table->string('enrollment_number')->unique(); // Student's enrollment number with a unique constraint
            $table->string('parent_name'); // Parent's name
            $table->string('parent_email'); // Parent's email
            $table->string('parent_phone'); // Parent's phone number
            $table->timestamps(); // Created at and Updated at timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students'); // Drop the students table if it exists
    }
};
