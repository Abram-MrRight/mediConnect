<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing users table
            $table->foreignId('patient_id')->constrained('users')->onDelete('cascade'); // Foreign key referencing users table
            $table->text('prescription_details'); // Prescription details
            $table->date('issue_date'); // Date when the prescription was issued
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions'); // Drop the prescriptions table if it exists
    }
}
