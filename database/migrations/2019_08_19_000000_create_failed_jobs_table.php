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
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('uuid')->unique(); // Unique identifier for the failed job
            $table->text('connection'); // The connection used to dispatch the job
            $table->text('queue'); // The queue the job was in
            $table->longText('payload'); // Serialized payload of the job
            $table->longText('exception'); // Serialized exception details
            $table->timestamp('failed_at')->useCurrent(); // Timestamp when the job failed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs'); // Drop the failed_jobs table if it exists
    }
};
