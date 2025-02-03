<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('paycom_transaction_id', 25)->nullable();
            $table->string('paycom_time', 13)->nullable();
            $table->string('paycom_time_datetime', 255)->nullable();
            $table->dateTime('create_time')->nullable();
            $table->dateTime('perform_time')->nullable();
            $table->string('cancel_time', 13)->nullable();
            $table->integer('amount')->nullable();
            $table->tinyInteger('state')->nullable();
            $table->tinyInteger('reason')->nullable();
            $table->text('receivers')->nullable();
            $table->integer('order_id')->nullable();
            $table->string('perform_time_unix', 13)->nullable();
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
