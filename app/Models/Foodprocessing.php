<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foodprocessing extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'category',
        'tag',
        'author',
        'author_role',
        'author_image',
        'views'
    ];

    protected $table = 'foodprocessings';

    public function categories(){
        return $this->hasOne(FoodprocessingCategories::class, 'id', 'category');
    }
}
