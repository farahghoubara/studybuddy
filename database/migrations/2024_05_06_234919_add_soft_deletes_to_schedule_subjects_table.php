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
        Schema::table('schedule_subjects', function (Blueprint $table) {
            $table->softDeletes(); // Adding soft delete column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedule_subjects', function (Blueprint $table) {
            $table->dropSoftDeletes(); // Dropping soft delete column
        });
    }
};
