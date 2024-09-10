<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
           Schema::create('students', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->string('email');
    $table->string('mobile_number');
    $table->string('enrollment_number')->unique();
    $table->string('parent_name');
    $table->string('parent_contact');
    $table->timestamps();
});

        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
}
