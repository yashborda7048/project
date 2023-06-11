<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->string('card_type');
            $table->string('front_img');
            $table->string('back_img');
            $table->string('massage');
            $table->string('song_name');
            $table->string('name');
            $table->string('user_date');
            $table->string('address');
            $table->string('font_style');
            $table->string('color');
            $table->string('payment_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forms');
    }
};