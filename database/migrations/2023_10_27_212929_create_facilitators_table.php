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
        Schema::create('facilitators', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('surname');
            $table->string('given_name');
            $table->string('aliases');
            $table->string('date_of_birth');
            $table->string('sex');
            $table->string('nin');
            $table->string('phone');
            $table->string('nationality');
            $table->string('state');
            $table->string('lga');
            $table->string('town');
            $table->string('present_address');
            $table->string('last_address');
            $table->string('type_offence');
            $table->string('type_conviction');
            $table->string('term_conviction');
            $table->string('victim_passport');
            $table->string('complexion');
            $table->string('place_of_arrest');
            $table->string('height');
            $table->string('eye_colour');
            $table->string('tribal_mark');
            $table->string('language_spoken');
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
        Schema::dropIfExists('facilitators');
    }
};
