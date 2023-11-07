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
        Schema::create('infos', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_id');
            $table->string('surname');
            $table->string('given_name');
            $table->string('aliases');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('nin');
            $table->string('phone');
            $table->integer('passport');
            $table->string('nationality');
            $table->string('state');
            $table->string('lga');
            $table->string('town');
            $table->string('present_address');
            $table->string('last_address');
            $table->string('origin_or_source');
            $table->string('transit');
            $table->string('entry_point');
            $table->string('destination');
            $table->string('exit_point');
            $table->string('reason_return');
            $table->string('complexion');
            $table->string('height');
            $table->string('eye_colour');
            $table->string('tribal_mark');
            $table->string('languages_spoken');
            $table->string('current_location');
            $table->string('photograph');
            $table->string('fingerprint');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos');
    }
};
