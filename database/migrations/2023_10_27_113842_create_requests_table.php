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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('surname');
            $table->string('given_name');
            $table->string('Aliases');
            $table->string('sex');
            $table->integer('nin');
            $table->string('phone');
            $table->string('nationality');
            $table->string('height');
            $table->string('tribal_mark');
            $table->string('languages_spoken');
            $table->string('current_location');
            $table->string('photograph');
            $table->string('Arrest_warrant');
            $table->string('reason_request');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
