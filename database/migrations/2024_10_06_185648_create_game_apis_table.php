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
        Schema::create('game_apis', function (Blueprint $table) {
            $table->id();
            $table->string('api_name');
            $table->string('api_url');
            $table->string('api_operator')->nullable();
            $table->string('api_password')->nullable();
            $table->string('api_key')->nullable();
            $table->string('api_code')->nullable();
            $table->integer('api_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_apis');
    }
};
