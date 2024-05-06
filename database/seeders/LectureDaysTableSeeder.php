<?php

namespace Database\Seeders;

use App\Subject;
use App\Models\LectureDay;
use Illuminate\Database\Seeder;

class LectureDaysTableSeeder extends Seeder
{
    public function run()
    {
        $lectureDays = [
            'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
        ];

        foreach ($lectureDays as $day) {
            LectureDay::create(['day' => $day]);
        }
    }
}
