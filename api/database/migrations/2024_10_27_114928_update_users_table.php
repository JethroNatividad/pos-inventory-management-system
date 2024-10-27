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
            // First drop the existing name column
            if (Schema::hasColumn('users', 'name')) {
                $table->dropColumn('name');
            }

            // Add new columns
            $table->string('first_name')->default('');
            $table->string('middle_name')->nullable();
            $table->string('last_name')->default('');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Reverse the changes
            $table->string('name');
            $table->dropColumn(['first_name', 'middle_name', 'last_name']);
        });
    }
};
