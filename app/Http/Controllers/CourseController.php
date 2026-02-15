<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of all courses.
     */
    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    /**
     * Display the specified course detail page.
     */
    public function show(Course $course)
    {
        $course->load('students');
        return view('courses.show', compact('course'));
    }
}
