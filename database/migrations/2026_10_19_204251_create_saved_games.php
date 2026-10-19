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
        Schema::create("saved_games_table",function (Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->constrained('form_data')->cascadeOnDelete();
            $table->integer("grid_score");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_games_table');
    }
};
