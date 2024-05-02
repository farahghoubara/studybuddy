<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'name' => 'Study with Cam💻',
        ]);

        Category::create([
            'name' => 'University🏫',
        ]);

        Category::create([
            'name' => 'Break Chat☕️',
        ]);

        Category::create([
            'name' => 'Project Collaboration📝',
        ]);

        Category::create([
            'name' => 'Study Challenge🎯',
        ]);

        Category::create([
            'name' => 'Subject Focus📚',
        ]);

        Category::create([
            'name' => 'Career Development📈',
        ]);

        Category::create([
            'name' => 'Peer Support🤝',
        ]);

        Category::create([
            'name' => 'Flexible Seisson🕐',
        ]);

        Category::create([
            'name' => 'Discussion💬',
        ]);

    }
}
