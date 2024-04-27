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
        Schema::create('sms_reminders', function (Blueprint $table) {
            $table->id('reminder_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->string('reminder_type');
            $table->dateTime('reminder_date_time');
            $table->string('status');
            $table->string('phone_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sms_reminders');
    }
};
