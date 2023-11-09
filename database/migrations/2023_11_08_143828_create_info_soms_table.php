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
        Schema::create('info_soms', function (Blueprint $table) {
            $table->id();
            
            $table->string('manager_name');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('facilities');
            
            $table->string('photograph');
            $table->integer('number_of_seats');
            $table->integer('vacancies');
            $table->integer('capacity');
            $table->string('Additional_information');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_soms');
    }
};
