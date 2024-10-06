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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_account_id')->default(0);
            $table->integer('user_id');
            $table->integer('promotion_id')->default(0);
            $table->integer('transaction_id')->default(0);
            $table->string('trx_no');
            $table->integer('nominal');
            $table->enum('type', ['deposit', 'withdraw', 'bonus']);
            $table->enum('status', ['pending', 'in_progress', 'completed', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
