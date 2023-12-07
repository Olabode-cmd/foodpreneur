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
        'desccription',
        'image',
        'tag',
        'author',
        'price',
        'students',
        'time',
        'rating',
        'category_id',
    ];

    public function category(){
        return $this->hasOne(CourseCategory::class, 'id', 'category_id');
    }
}
