<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Define a new anonymous class that extends the Migration class
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the 'uploads' table
        Schema::create('uploads', function (Blueprint $table) {
            $table->id(); // Primary key column
            $table->string('location'); // stores the location
            $table->string('user_id'); // stores the user id
            // $table->integer('plant_id'); // stores the plant id
            $table->string('upload_image'); // stores the upload image
            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'uploads' table if it exists
        Schema::dropIfExists('uploads');
    }
};
