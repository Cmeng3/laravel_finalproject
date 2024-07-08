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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id('contact_us_id');
            $table->string('messenger', 1000);
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
        Schema::dropIfExists('contact_us');
    }
};
