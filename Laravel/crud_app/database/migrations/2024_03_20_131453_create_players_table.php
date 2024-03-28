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
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lastName');
            $table->enum('ageGroup', ["9-11", "11-14", "14-17", "Above 17"]);
            $table->enum('gender', ["Male", "Female"]);
            $table->date('dob');
            $table->enum('sportsName', ["Cricket", "Kabaddi", "Kho-Kho", "Football"]);
            $table->string('mobileNumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('players');
    }
};