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
        Schema::create('transaction_types', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique(); // e.g., "Savings", "Contribution", "Loan", "Repayment", "Withdrawal"
            $table->string('slug')->unique(); // e.g., "savings", "contribution", etc.
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('type_id')->constrained('transaction_types')->cascadeOnUpdate()->cascadeOnDelete();
            $table->uuid('session_id'); // Links related transactions together
            $table->text('description')->nullable();
            $table->string('status')->default('pending'); // 'pending', 'completed', 'failed'
            $table->foreignUuid('created_by')->constrained('users')->cascadeOnUpdate()->cascadeOnDelete(); // User initiating the transaction
            $table->timestamp('date')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transaction_entries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('transaction_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('account_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->enum('type', ['dr', 'cr']);
            $table->decimal('amount', 18);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_entries');
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('transaction_types');
    }
};
