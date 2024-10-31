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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('specialization')->nullable(); // e.g., Cardiologist, Dermatologist
            $table->string('license_number')->unique();
            $table->integer('experience_years')->nullable();
            $table->string('clinic_address')->nullable();
            $table->json('available_days')->nullable(); // JSON format to store available days
            $table->text('notes')->nullable(); // Additional notes on the doctor
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
