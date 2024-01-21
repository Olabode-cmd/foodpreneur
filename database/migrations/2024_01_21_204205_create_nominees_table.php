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
        Schema::create('nominees', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->enum('voter',['Self','Others'])->default('Self');
            $table->string('nominees_firstname');
            $table->string('nominees_lastname');
            $table->string('country');
            $table->string('city');
            $table->string('business')->nullable();
            $table->string('personal')->nullable();
            $table->string('ig')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('reason');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nominees');
    }
};
