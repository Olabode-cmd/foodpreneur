<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\EventAttendees;
use App\Models\EventCategories;
use App\Models\Events;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $events = Events::latest()->paginate(10);
        return view('home.events', compact('events'));
    }

    public function event($slug){
        $event = Events::where('slug', $slug)->first();
        $eventsCategory =  EventCategories::all();
        return view('home.single-event', compact('event', 'eventsCategory'));
    }

    public function register($slug){
        $event = Events::where('slug', $slug)->first();
        return view('home.event-register',compact('event'));
    }

    public function store(Request $request){

        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'about' => 'required'
        ]);

        $email = EventAttendees::where('email', $request->email)->where('event_id', $request->event_id)->first();
        if($email){
            return back()->with('error','You have already registered for this event');
        }

        EventAttendees::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'about' => $request->about,
            'event_id' =>$request->event_id
        ]);

        return back()->with('success','You have successsfully registered for this event');
    }
}
