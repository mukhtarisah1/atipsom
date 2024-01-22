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
        Schema::create('incidents', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->string('number');
            $table->string('caller_name');
            $table->string('category');
            $table->timestamp("opened");
            $table->string('closed');
            $table->string('priority');
            $table->string('state');
            $table->string('description');
            $table->string('assigned_to');
            $table->string('location');
            $table->timestamps();

            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incidents');
    }
};
