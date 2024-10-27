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
        Schema::table('users', function (Blueprint $table) {
            $table->boolean('is_business_owner')->default(false);
            $table->boolean('is_administrator')->default(false);
            $table->boolean('is_inventory_manager')->default(false);
            $table->boolean('is_cashier')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['is_business_owner', 'is_administrator', 'is_inventory_manager', 'is_cashier']);
        });
    }
};
