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
        // Create the 'plant_supplier' pivot table
        Schema::create('plant_supplier', function (Blueprint $table) {
            // Define columns of the pivot table
            $table->id(); // Primary key column
            $table->unsignedBigInteger('plant_id'); // Foreign key referencing plants table
            $table->unsignedBigInteger('supplier_id'); // Foreign key referencing suppliers table

            // Define foreign key constraints
            $table->foreign('plant_id')->references('id')->on('plants')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('supplier_id')->references('id')->on('suppliers')->onUpdate('cascade')->onDelete('restrict');

            $table->timestamps(); // Created_at and updated_at columns for tracking timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'plant_supplier' pivot table if it exists
        Schema::dropIfExists('plant_supplier');
    }
};
