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
        Schema::create('academic_programs', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('time');
            $table->string('faculty1')->nullable();
            $table->string('facultyLink1')->nullable();
            $table->string('faculty2')->nullable();
            $table->string('facultyLink2')->nullable();
            $table->string('faculty3')->nullable();
            $table->string('facultyLink3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_programs');
    }
};
