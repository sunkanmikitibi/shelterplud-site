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
        Schema::create('movers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(\App\Models\Location::class, 'location_from');
            $table->foreignIdFor(\App\Models\Location::class, 'location_to');
            $table->dateTime('date_of_movement');
            $table->text('comment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movers');
    }
};
