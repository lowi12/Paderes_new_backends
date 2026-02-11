<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'Sample Post',
            'text' => 'This is a sample content.',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Getting Started with Laravel',
            'text' => 'Laravel is a powerful PHP framework that makes web development enjoyable and creative.',
            'category_id' => 1,
        ]);

        Post::create([
            'title' => 'Understanding MVC Pattern',
            'text' => 'The Model-View-Controller pattern separates concerns and makes applications more maintainable.',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Database Migrations',
            'text' => 'Migrations are like version control for your database, allowing you to modify your database structure in a structured way.',
            'category_id' => 2,
        ]);

        Post::create([
            'title' => 'Eloquent ORM',
            'text' => 'Eloquent provides an elegant ActiveRecord implementation for working with your database.',
            'category_id' => 3,
        ]);
    }
}
