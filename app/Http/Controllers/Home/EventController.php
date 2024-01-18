<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\EventCategories;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Events::latest()->get();
        $eventsCategory =  EventCategories::all();
        return view('home.events', compact('events', 'eventsCategory'));
    }

    public function event($slug){
        $event = Events::where('slug', $slug)->first();
        $eventsCategory =  EventCategories::all();
        return view('home.single-event', compact('event', 'eventsCategory'));
    }

    public function register($slug){
        return view('home.event-register');
    }
}
