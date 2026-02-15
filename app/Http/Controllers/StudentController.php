<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of all students.
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Display the specified student profile.
     */
    public function show(Student $student)
    {
        $student->load('courses');
        return view('students.show', compact('student'));
    }
}
