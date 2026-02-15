<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Course;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Enroll a student in a course.
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::findOrFail($request->student_id);
        $course = Course::findOrFail($request->course_id);

        // Check if student is already enrolled
        if ($student->courses()->where('course_id', $course->id)->exists()) {
            return back()->with('error', 'Student is already enrolled in this course.');
        }

        // Check if course has available capacity
        if (!$course->hasAvailableCapacity()) {
            return back()->with('error', 'Course has reached its capacity limit.');
        }

        // Enroll the student
        $student->courses()->attach($course->id);

        return back()->with('success', 'Student enrolled successfully.');
    }

    /**
     * Remove a student from a course.
     */
    public function destroy(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $student = Student::findOrFail($request->student_id);
        $course = Course::findOrFail($request->course_id);

        $student->courses()->detach($course->id);

        return back()->with('success', 'Student unenrolled successfully.');
    }
}
