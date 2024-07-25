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
        Schema::create('admissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
           // Assumes 'courses' table and 'id' column by default
            // Cascade delete if course is deleted
            $table->foreignId('course_price')->constrained()->onDelete('cascade');
            $table->string('full_name');
            $table->string('email');
            $table->integer('mobile_number'); // Changed from 'number' to 'mobile_number' for clarity
            $table->date('birthdate');
            $table->integer('age'); // Changed from 'number' to 'integer' for proper age storage
            $table->string('father_number'); // Added field for father's number
            $table->string('mother_number'); // Added field for mother's number
            $table->string('citizenship_id'); // Added field for citizenship ID
            $table->string('location'); // Added field for location
            $table->string('image');
            $table->timestamps();
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
