<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            [
                'course_code' => 'IT101',
                'course_name' => 'Introduction to Information Technology',
                'capacity' => 30,
            ],
            [
                'course_code' => 'CS201',
                'course_name' => 'Data Structures and Algorithms',
                'capacity' => 25,
            ],
            [
                'course_code' => 'DB301',
                'course_name' => 'Database Management Systems',
                'capacity' => 20,
            ],
            [
                'course_code' => 'WEB401',
                'course_name' => 'Web Development',
                'capacity' => 35,
            ],
            [
                'course_code' => 'NET501',
                'course_name' => 'Computer Networks',
                'capacity' => 28,
            ],
            [
                'course_code' => 'SE601',
                'course_name' => 'Software Engineering',
                'capacity' => 22,
            ],
            [
                'course_code' => 'OS401',
                'course_name' => 'Operating Systems',
                'capacity' => 25,
            ],
            [
                'course_code' => 'AI301',
                'course_name' => 'Artificial Intelligence',
                'capacity' => 20,
            ],
            [
                'course_code' => 'SEC501',
                'course_name' => 'Cybersecurity Fundamentals',
                'capacity' => 18,
            ],
            [
                'course_code' => 'MOB401',
                'course_name' => 'Mobile Application Development',
                'capacity' => 30,
            ],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}

