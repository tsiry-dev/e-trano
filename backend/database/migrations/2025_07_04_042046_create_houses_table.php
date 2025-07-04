<?php

use App\Models\House;
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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();

            $table->string('title');
            $table->string('slug')->unique();
            $table->longText('description')->comment('Description du logement');
            $table->string('address');
            $table->string('city');
            $table->float('price_per_month');
            $table->float('reservation_price');

            $table->enum('status', [
                House::DISPONIBLE,
                House::RENSERVER,
                House::DEJA_LOUER,
            ])->default(House::DISPONIBLE);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
