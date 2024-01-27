<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'category_id',
        'author',
        'author_role',
        'author_image',
        'tag',
        'is_trending',
        'views',
    ];

    public function category(){
        return $this->hasOne(BlogCategory::class, 'id', 'category_id');
    }
}
