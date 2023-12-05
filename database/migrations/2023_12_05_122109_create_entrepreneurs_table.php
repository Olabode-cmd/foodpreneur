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
        Schema::create('entrepreneurs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('location');
            $table->image('image');
            $table->text('socials');
            $table->text('description');
            $table->text('awards');
            $table->text('philanthropy');
            $table->text('signature');
            $table->string('tag');
            $table->text('achievements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entrepreneurs');
    }
};
