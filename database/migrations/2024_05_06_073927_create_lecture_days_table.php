<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('lecture_days', function (Blueprint $table) {
            $table->id();
            $table->string('day');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecture_days');
    }
};
