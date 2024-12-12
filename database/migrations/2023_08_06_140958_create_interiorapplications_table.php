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
        Schema::create('interiorapplications', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email')->nullable();
            $table->integer('location_id');
            $table->string('city');
            $table->float('budget');
            $table->string('type_of_apartment');
            $table->foreignIdFor(\App\Models\Vendor::class, 'vendor_id');
            $table->string('possession_timeline');
            $table->string('scope_of_work');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiorapplications');
    }
};
