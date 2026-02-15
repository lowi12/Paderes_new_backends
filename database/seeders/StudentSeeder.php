<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $students = [
            [
                'student_number' => '2021-001',
                'first_name' => 'Juan',
                'last_name' => 'Dela Cruz',
                'email' => 'juan.delacruz@example.com',
            ],
            [
                'student_number' => '2021-002',
                'first_name' => 'Maria',
                'last_name' => 'Santos',
                'email' => 'maria.santos@example.com',
            ],
            [
                'student_number' => '2021-003',
                'first_name' => 'Jose',
                'last_name' => 'Rizal',
                'email' => 'jose.rizal@example.com',
            ],
            [
                'student_number' => '2021-004',
                'first_name' => 'Ana',
                'last_name' => 'Garcia',
                'email' => 'ana.garcia@example.com',
            ],
            [
                'student_number' => '2021-005',
                'first_name' => 'Carlos',
                'last_name' => 'Reyes',
                'email' => 'carlos.reyes@example.com',
            ],
            [
                'student_number' => '2022-001',
                'first_name' => 'Liza',
                'last_name' => 'Fernandez',
                'email' => 'liza.fernandez@example.com',
            ],
            [
                'student_number' => '2022-002',
                'first_name' => 'Michael',
                'last_name' => 'Torres',
                'email' => 'michael.torres@example.com',
            ],
            [
                'student_number' => '2022-003',
                'first_name' => 'Sarah',
                'last_name' => 'Lopez',
                'email' => 'sarah.lopez@example.com',
            ],
            [
                'student_number' => '2022-004',
                'first_name' => 'David',
                'last_name' => 'Martinez',
                'email' => 'david.martinez@example.com',
            ],
            [
                'student_number' => '2022-005',
                'first_name' => 'Jennifer',
                'last_name' => 'Cruz',
                'email' => 'jennifer.cruz@example.com',
            ],
            [
                'student_number' => '2023-001',
                'first_name' => 'Robert',
                'last_name' => 'Villanueva',
                'email' => 'robert.villanueva@example.com',
            ],
            [
                'student_number' => '2023-002',
                'first_name' => 'Michelle',
                'last_name' => 'Ramos',
                'email' => 'michelle.ramos@example.com',
            ],
            [
                'student_number' => '2023-003',
                'first_name' => 'James',
                'last_name' => 'Aquino',
                'email' => 'james.aquino@example.com',
            ],
            [
                'student_number' => '2023-004',
                'first_name' => 'Patricia',
                'last_name' => 'Bautista',
                'email' => 'patricia.bautista@example.com',
            ],
            [
                'student_number' => '2023-005',
                'first_name' => 'Daniel',
                'last_name' => 'Mendoza',
                'email' => 'daniel.mendoza@example.com',
            ],
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
