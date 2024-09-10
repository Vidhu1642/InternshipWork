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
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // User's name
            $table->string('email')->unique(); // User's email with a unique constraint
            $table->timestamp('email_verified_at')->nullable(); // Email verification timestamp
            $table->string('password'); // User's password
            $table->rememberToken(); // Token for "remember me" functionality
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
        Schema::dropIfExists('users'); // Drop the users table if it exists
    }
};
