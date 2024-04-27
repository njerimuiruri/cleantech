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
        Schema::create('locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->foreignId('user_id')->constrained('users', 'user_id');
            $table->foreignId('subcounty_id')->constrained('subcounties','subcounty_id');
            $table->foreignId('ward_id')->constrained('wards','ward_id');
            $table->string('estate');
            $table->string('building_name')->nullable();
            $table->string('house_number')->nullable();
            $table->foreignId('county_id')->constrained('counties','county_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
