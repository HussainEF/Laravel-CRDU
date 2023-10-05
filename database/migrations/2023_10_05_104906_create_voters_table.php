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
        Schema::create('voters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 50);//Try Unique() here
            $table->string('contact', 11);
            // Foreign key and Constraints
            $table->unsignedBigInteger('q_id');
            $table->foreign('q_id')->references('id')->on('questions');
            $table->string('selected_option', 7);//Try enum here
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('voters');
    }
};
