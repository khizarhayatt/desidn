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
        Schema::create('doctor_details', function (Blueprint $table) {
            $table->id();   
            $table->integer('user_id');
            $table->string('phone_number');
            $table->string('profile_picture')->nullable();
            $table->string('board_certified')->default(false);
            $table->string('medical_school')->nullable();
            $table->string('residency')->nullable();
            $table->string('fellowship')->nullable(); 
            $table->text('categories')->nullable();
            $table->text('resume')->nullable();
            $table->text('introduction')->nullable();
            $table->text('signup_bonus')->nullable();
            $table->string('status')->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctor_details');
    }
};
