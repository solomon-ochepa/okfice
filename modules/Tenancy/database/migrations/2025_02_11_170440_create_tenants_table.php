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
        Schema::create('tenants', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // your custom columns may go here
            $table->string('name');
            $table->string('slug')->nullable();
            $table->foreignUuid('user_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('subscription_id')->nullable();

            $table->json('data')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['name', 'user_id'], 'unique_tenant');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tenants');
    }
};
