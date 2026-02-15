<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    protected $fillable = [
        'course_code',
        'course_name',
        'capacity',
    ];

    /**
     * The students enrolled in this course.
     */
    public function students(): BelongsToMany
    {
        return $this->belongsToMany(Student::class, 'enrollments')
                    ->withTimestamps();
    }

    /**
     * Get the number of enrolled students.
     */
    public function getEnrolledCountAttribute(): int
    {
        return $this->students()->count();
    }

    /**
     * Check if the course has available capacity.
     */
    public function hasAvailableCapacity(): bool
    {
        return $this->students()->count() < $this->capacity;
    }
}
