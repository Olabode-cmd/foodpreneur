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
        Schema::create('foodprocessings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category');
            $table->foreign('category')->references('id')->on('foodprecessings_categories');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('image');
            $table->string('tag');
            $table->string('author');
            $table->string('author_role');
            $table->string('author_image');
            $table->integer('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foodprocessings');
    }
};