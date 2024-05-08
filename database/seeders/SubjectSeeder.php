<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Subject;

class SubjectSeeder extends Seeder
{
    public function run()
    {
        Subject::create([
            'name' => 'Software Engineering',
        ]);

        Subject::create([
            'name' => 'Algorithms & Data Structures',
        ]);

        Subject::create([
            'name' => 'Data Management & Analysis',
        ]);

        Subject::create([
            'name' => 'Operating Systems',
        ]);

        Subject::create([
            'name' => 'Object Oriented Programming',
        ]);

        Subject::create([
            'name' => 'Web Technologies',
        ]);

        Subject::create([
            'name' => 'Machine Learning & Artificial Intelligence',
        ]);

        Subject::create([
            'name' => 'Python',
        ]);

    }
}
