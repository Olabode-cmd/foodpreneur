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
        Schema::create('communities', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('work');
            $table->string('country');
            $table->string('city');
            $table->string('business')->nullable();
            $table->string('personal')->nullable();
            $table->string('ig')->nullable();
            $table->string('linked')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communities');
    }
};
