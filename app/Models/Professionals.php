<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professionals extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'role',
        'image',
        'location',
        'description',
        'socials',
        'awards',
        'philanthropy',
        'signature',
        'tag',
        'achievements',
        'is_featured',
        'views'
    ];
}
