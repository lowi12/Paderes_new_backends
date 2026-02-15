@extends('layout')

@section('title', $course->course_name)

@section('content')
<div class="mb-6">
    <a href="{{ route('courses.index') }}" class="inline-flex items-center text-red-600 hover:text-red-700 font-medium transition-colors duration-200">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Courses
    </a>
</div>

<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <!-- Header -->
    <div class="bg-gradient-to-r from-red-600 to-red-700 px-6 py-8">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-3xl font-bold text-white">{{ $course->course_code }}</h1>
                <p class="mt-1 text-xl text-red-100">{{ $course->course_name }}</p>
                <p class="mt-2 text-red-200">Course Details & Student Enrollment</p>
            </div>
            <div class="hidden md:block">
                <svg class="h-20 w-20 text-red-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="px-6 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <div class="bg-gradient-to-br from-red-50 to-red-100 rounded-lg p-6 border-l-4 border-red-600">
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-red-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Course Code</p>
                        <p class="text-xl font-bold text-gray-900 mt-1">{{ $course->course_code }}</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-lg p-6 border-l-4 border-blue-600">
                <div class="flex items-center">
                    <svg class="h-8 w-8 text-blue-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Capacity</p>
                        <p class="text-xl font-bold text-gray-900 mt-1">{{ $course->capacity }} students</p>
                    </div>
                </div>
            </div>

            <div class="bg-gradient-to-br {{ $course->hasAvailableCapacity() ? 'from-green-50 to-green-100 border-green-600' : 'from-red-50 to-red-100 border-red-600' }} rounded-lg p-6 border-l-4">
                <div class="flex items-center">
                    <svg class="h-8 w-8 {{ $course->hasAvailableCapacity() ? 'text-green-600' : 'text-red-600' }} mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <p class="text-sm font-medium text-gray-600">Enrollment Status</p>
                        <p class="text-xl font-bold text-gray-900 mt-1">{{ $course->students->count() }} / {{ $course->capacity }}</p>
                        @if($course->hasAvailableCapacity())
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 mt-2">
                                Available
                            </span>
                        @else
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800 mt-2">
                                Full
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <!-- Progress Bar -->
        <div class="mb-8 bg-gray-50 rounded-lg p-6">
            <div class="flex items-center justify-between mb-2">
                <span class="text-sm font-medium text-gray-700">Enrollment Progress</span>
                <span class="text-sm font-semibold text-gray-900">{{ round(($course->students->count() / $course->capacity) * 100) }}%</span>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="{{ $course->hasAvailableCapacity() ? 'bg-green-600' : 'bg-red-600' }} h-4 rounded-full transition-all duration-300" style="width: {{ ($course->students->count() / $course->capacity) * 100 }}%"></div>
            </div>
        </div>

        <!-- Enrolled Students Section -->
        <div class="bg-gray-50 rounded-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-2xl font-bold text-gray-900">Enrolled Students</h2>
                <span class="px-3 py-1 bg-red-100 text-red-800 text-sm font-semibold rounded-full">
                    {{ $course->students->count() }} {{ Str::plural('Student', $course->students->count()) }}
                </span>
            </div>

            @if($course->students->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    @foreach($course->students as $student)
                    <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow duration-200 border-l-4 border-blue-600">
                        <div class="flex items-start justify-between">
                            <div class="flex-1">
                                <div class="flex items-center mb-2">
                                    <div class="h-10 w-10 rounded-full bg-blue-100 flex items-center justify-center mr-3">
                                        <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-bold text-gray-900">{{ $student->first_name }} {{ $student->last_name }}</h3>
                                        <p class="text-sm text-gray-500">{{ $student->student_number }}</p>
                                    </div>
                                </div>
                                <p class="text-sm text-gray-600 mt-2 flex items-center">
                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                    {{ $student->email }}
                                </p>
                            </div>
                            <a href="{{ route('students.show', $student) }}" class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                                View
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12 bg-white rounded-lg">
                    <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                    <h3 class="mt-4 text-lg font-medium text-gray-900">No Enrolled Students</h3>
                    <p class="mt-2 text-sm text-gray-500">No students are currently enrolled in this course.</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
