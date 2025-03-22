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
            $table->string('Id', length: 20)->primary();
            $table->string('TransactionType', length: 1)->nullable();
            $table->dateTime('PostDate')->nullable();
            $table->mediumText('Memo')->nullable();
            $table->bigInteger('BankId')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('transactions');
    }
};
