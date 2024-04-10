<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Check if the table already exists
        if (!Schema::hasTable('videoinfo')) {
            Schema::create('videoinfo', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable();
                $table->text('description')->nullable();
                $table->string('tag')->nullable();
                $table->string('category')->nullable();
                $table->string('question')->nullable();
                $table->string('video_file_name')->nullable();

                // Ensure you are using unsignedBigInteger for foreign key references
                $table->unsignedBigInteger('user_id')->nullable();
                $table->unsignedBigInteger('child_id')->nullable(); // If this is a foreign key, it should also be unsigned

                $table->integer('video_length')->nullable();
                $table->date('date')->nullable();
                $table->string('status')->nullable();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videoinfo');
    }
};
