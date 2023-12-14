<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodprocessingCategories extends Model
{
    use HasFactory;

    protected $table = 'foodprocessings_categories';
    protected $fillable = [
        'name',
        'slug',
    ];

    public function foodprocessings()
    {
        return $this->hasMany(Foodprocessing::class, 'category', 'id');
    }
}
