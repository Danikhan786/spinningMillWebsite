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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('propertyName');
            $table->decimal('propertyPrice', 10, 2);
            $table->integer('bed');
            $table->integer('bath');
            $table->decimal('propertySqft', 8, 2);
            $table->string('location');
            $table->decimal('pricePerSqft', 8, 2);
            $table->string('propertyImage')->nullable(); // For a primary image
            $table->json('propertyImages')->nullable(); // For multiple images
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
