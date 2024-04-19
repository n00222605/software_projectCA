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
        // Add a new column 'plant_id' to the 'uploads' table
        Schema::table('uploads', function (Blueprint $table) {
            $table->unsignedBigInteger('plant_id'); // Unsigned big integer column for storing plant id
            // Define a foreign key constraint on the 'plant_id' column
            $table->foreign('plant_id')
                ->references('id') // Reference the 'id' column of the 'plants' table
                ->on('plants')
                ->onUpdate('cascade') // Cascade updates to the referenced table
                ->onDelete('restrict'); // Restrict deletion if there are related records
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove the foreign key constraint and the 'plant_id' column from the 'uploads' table
        Schema::table('uploads', function (Blueprint $table) {
            $table->dropForeign(['plant_id']); // Drop the foreign key constraint
            $table->dropColumn('plant_id'); // Drop the 'plant_id' column
        });
    }
};
