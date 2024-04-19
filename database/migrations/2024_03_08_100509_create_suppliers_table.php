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
        // Create the 'suppliers' table
        Schema::create('suppliers', function (Blueprint $table) {
            // Define columns of the 'suppliers' table
            $table->id(); // Primary key column
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'suppliers' table if it exists
        Schema::dropIfExists('suppliers');
    }
};
