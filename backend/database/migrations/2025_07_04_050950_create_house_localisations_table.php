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
        Schema::create('house_localisations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('house_id')->unique();
            $table->foreign('house_id')
                  ->references('id')
                  ->on('houses')
                  ->cascadeOnDelete();

            $table->string('latittude');
            $table->string('longitude');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_localisations');
    }
};
