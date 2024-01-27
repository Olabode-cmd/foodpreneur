<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'firstname',
        'lastname',
        'work',
        'country',
        'city',
        'business',
        'personal',
        'ig',
        'linked'
    ];
}
