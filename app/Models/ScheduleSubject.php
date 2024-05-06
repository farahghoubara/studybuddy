<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleSubject extends Model
{
    use HasFactory;

    public function schedule()
    {
        return $this->belongsTo(Schedule::class);
    }

    public function lectureDays()
    {
        return $this->belongsToMany(LectureDay::class);
    }
}
