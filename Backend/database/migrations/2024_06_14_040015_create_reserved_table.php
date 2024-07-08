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
    Schema::create('reserved', function (Blueprint $table) {
        $table->id('reserve_id');
        $table->date('date_order');
        $table->unsignedBigInteger('animal_id'); // Ensure this is unsignedBigInteger
        $table->foreign('animal_id')->references('animal_id')->on('animals')->onDelete('cascade'); // Adding onDelete for good measure
        $table->unsignedBigInteger('user_id'); // Ensure this is unsignedBigInteger
        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Adding onDelete for good measure
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserved');
    }
};
