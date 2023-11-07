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
        Schema::create('offences', function (Blueprint $table) {
            $table->id();
            $table->integer('passport');
            $table->string('reason_return');
            $table->string('type_offence');
            $table->string('type_return');
            $table->string('date_return');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offences');
    }
};
