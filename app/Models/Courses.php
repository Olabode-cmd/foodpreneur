<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'tag',
        'reason',
        'duration',
        'author_name',
        'author_image',
        'author_role',
        'author_description',
        'course_sections',
        'course_lectures',
        'course_hours',
        'price',
        'slashed_price',
        'students',
        'time',
        'rating',
        'category_id',
        'url',
        'views'
    ];

    public function category(){
        return $this->hasOne(CourseCategory::class, 'id', 'category_id');
    }
}
