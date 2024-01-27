<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventAttendees extends Model
{
    use HasFactory;

    protected $table = 'events_attendees';

    protected $fillable = [
        'event_id',
        'firstname',
        'lastname',
        'about',
        'email',
        'phone'
    ];

    public function event(){
        return $this->belongsTo(Events::class);
    }
}
