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
        Schema::create('house_galleries', function (Blueprint $table) {
            $table->id();

            $table->foreignId('house_id');
            $table->foreign('house_id')
                  ->references('id')
                  ->on('houses')
                  ->cascadeOnDelete();

            $table->string('picture');

            $table->boolean('is_cover')->default(false);
            $table->text('description');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_galleries');
    }
};
