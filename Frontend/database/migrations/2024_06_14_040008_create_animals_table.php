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
        Schema::create('animals', function (Blueprint $table) {
            $table->id('animal_id');
            $table->string('categories', 50);
            $table->date('date_found');
            $table->date('date_adoption');
            $table->string('service_cost', 20);
            $table->string('picture', 255);
            $table->string('pet_name', 50);
            $table->unsignedBigInteger('user_id'); // Ensure this is unsignedBigInteger
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade'); // Adding onDelete for good measure            $table->timestamps();
            //created_at and updated
            $table->string('updated_at');
            $table->string('created_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
