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
        Schema::create('featured_lotteries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('price');
            $table->string('time');
            $table->text('about_draw');
            $table->text('details');
            $table->text('draw_terms');
            $table->string('picture');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('featured_lotteries');
    }
};
