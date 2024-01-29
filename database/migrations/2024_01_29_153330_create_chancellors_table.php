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
        Schema::create('chancellors', function (Blueprint $table) {
            $table->id();
            $table->string('chan_img');
            $table->string('chan_name');
            $table->text('chan_about');
            $table->string('chan_web');
            $table->string('chan_fb');
            $table->string('chan_tw');
            $table->string('chan_link');
            $table->text('chan_welcome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chancellors');
    }
};
