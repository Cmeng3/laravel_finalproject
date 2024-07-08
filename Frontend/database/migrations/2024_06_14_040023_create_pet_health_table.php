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
    Schema::create('pet_health', function (Blueprint $table) {
        $table->id('health_id');
        $table->string('eye_check', 100);
        $table->string('body_check', 100);
        $table->string('ears_check', 100);
        $table->string('weight_check', 100);
        $table->integer('new_column');
        $table->unsignedBigInteger('animal_id'); // Ensure this is unsignedBigInteger
        $table->foreign('animal_id')->references('animal_id')->on('animals')->onDelete('cascade'); // Adding onDelete for good measure        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pet_health');
    }
};
