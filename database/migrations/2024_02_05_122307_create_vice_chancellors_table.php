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
        Schema::create('vice_chancellors', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name');
            $table->string('degree');
            $table->string('address');
            $table->string('email');
            $table->string('phone');
            $table->string('webLink');
            $table->string('Twitter');
            $table->string('facebook');
            $table->string('linkedIn');
            $table->text('about');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vice_chancellors');
    }
};
