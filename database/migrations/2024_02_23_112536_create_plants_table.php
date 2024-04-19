<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Define a new anonymous class that extends the Migration class
return new class extends Migration
{
    // Define the "up" method to create the table
    public function up(): void
    {
        Schema::create('plants', function (Blueprint $table) {
            // Define columns of the 'plants' table
            $table->id(); // Primary key column
            $table->string('scientific_name');
            $table->string('common_name');
            $table->string('family');
            $table->text('description');
            $table->text('care');
            $table->string('height');
            $table->string('supplier'); // Foreign Key
            $table->string('plant_image')->nullable(); // Nullable column for plant image
            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    // Define the "down" method to drop the table if needed
    public function down(): void
    {
        Schema::dropIfExists('plants'); // Drop the 'plants' table if it exists
    }
};
