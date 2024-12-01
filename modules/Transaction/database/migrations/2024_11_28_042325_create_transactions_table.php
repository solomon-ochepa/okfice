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
            $table->string('name')->unique();
            $table->string('slug')->index();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('transactions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('type');
            $table->decimal('amount', 16, 2)->index();
            $table->uuidMorphs('entity'); // (e.g., users, members, etc.)
            $table->nullableUuidMorphs('transactable'); // (e.g., loans, savings, etc.)
            $table->foreignUuid('status')->default('pending');
            $table->foreignUuid('processed_by')->nullable();
            $table->timestamp('date')->useCurrent();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
        Schema::dropIfExists('transaction_types');
    }
};
