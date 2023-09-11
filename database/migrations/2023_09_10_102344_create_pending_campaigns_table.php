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
        Schema::create('pending_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('title');
            $table->string('fullName');
            $table->string('email');
            $table->integer('phone');
            $table->bigInteger('target_money');
            $table->string('description');
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_campaigns');
    }
};
