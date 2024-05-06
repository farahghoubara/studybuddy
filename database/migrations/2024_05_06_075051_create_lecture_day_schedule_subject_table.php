<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLectureDayScheduleSubjectTable extends Migration
{
    public function up()
    {
        Schema::create('lecture_day_schedule_subject', function (Blueprint $table) {
            $table->foreignId('schedule_subject_id')->constrained()->onDelete('cascade');
            $table->foreignId('lecture_day_id')->constrained()->onDelete('cascade');
            $table->primary(['schedule_subject_id', 'lecture_day_id']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lecture_day_schedule_subject');
    }
}
