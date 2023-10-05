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
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            
            //Foreign Key and Constraints
            $table->unsignedBigInteger('q_id');
            $table->foreign('q_id')->references('id')->on('questions');

            $table->integer('option1');
            $table->integer('option2');
            $table->integer('option3');
            $table->integer('option4');
            $table->integer('option5');
            $table->integer('option6');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
