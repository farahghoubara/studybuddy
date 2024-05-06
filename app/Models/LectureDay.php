<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LectureDay extends Model
{
    use HasFactory;

    public function scheduleSubjects()
    {
        return $this->belongsToMany(ScheduleSubject::class);
    }
}
