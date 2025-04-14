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
        Schema::create('accounts', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('user_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('number')->unique();
            $table->string('name')->default('Savings');
            $table->enum('type', ['asset', 'liability', 'equity', 'revenue', 'expense'])->nullable()->default('liability');
            $table->decimal('amount', 18)->index()->default(0);
            $table->string('currency')->nullable();
            $table->boolean('primary')->nullable()->default(true);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['user_id', 'name'], 'unique_account_name');
            $table->unique(['user_id', 'primary'], 'unique_primary_account');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
