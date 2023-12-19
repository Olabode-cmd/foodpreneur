<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categories(){
        return $this->hasOne(EventCategories::class, 'id', 'category_id');
    }

    public function attendees(){
        return $this->hasMany(EventAttendees::class, 'event_id', 'id');
    }

    

}
