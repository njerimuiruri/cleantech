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
        Schema::create('trash_collection', function (Blueprint $table) {
            $table->id('collection_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->foreignId('location_id')->constrained('locations','location_id');
            $table->dateTime('collection_date_time');
            $table->boolean('is_special_request');
            $table->string('status');
            $table->integer('trash_bag_count');
            $table->integer('additional_bags_requested')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->string('collection_day')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trash_collections');
    }
};
