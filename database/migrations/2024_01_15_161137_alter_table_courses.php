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
        Schema::table('courses', function (Blueprint $table) {
            $table->longText('reason')->nullable();
            $table->longText('duration')->nullable();
            $table->string('author_name')->nullable();
            $table->string('author_image')->nullable();
            $table->string('author_role')->nullable();
            $table->longText('author_description')->nullable();
            $table->integer('course_sections')->default(0);
            $table->integer('course_lectures')->default(0);
            $table->string('course_hours')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('author');
        });
    }
};
