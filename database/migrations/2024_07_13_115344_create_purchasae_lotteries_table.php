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
        Schema::create('purchasae_lotteries', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('user_name');
            $table->string('lottery_id');
            $table->string('ticket_qty');
            $table->string('price');
            $table->string('total_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchasae_lotteries');
    }
};
