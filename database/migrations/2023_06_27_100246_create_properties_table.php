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
            $table->string('title');
            $table->text('description');
            $table->text('property_address');
            $table->text('city');
            $table->integer('no_of_bedrooms');
            $table->integer('no_of_bathrooms');
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('location_id');
            $table->unsignedInteger('type_id');
            $table->string('cover_image');
            $table->double('price');
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
