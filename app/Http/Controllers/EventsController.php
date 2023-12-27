<?php

namespace App\Http\Controllers;

use App\Models\EventCategories;
use App\Models\Events;
use App\Traits\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventsController extends Controller
{
    use Actions;
    
    public function index()
    {
        $events = Events::latest()->with('categories','attendees')->get();
        return view('admin.events.index',compact('events'));
    }

   
    public function create()
    {

        $categories = EventCategories::orderBy('name')->get();
        return view('admin.events.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'city' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'category' => 'required',
            'speakers_name.*' => 'required',
            'speakers_role.*' => 'required',
            'speakers_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'speakers_company.*' => 'required',
        ]);

        $path = $request->file('image')->store('events', 'public');

        Events::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'date' => $request->date,
            'location' => $request->location,
            'city' => $request->city,
            'description' => $request->description,
            'schedule' => $request->schedule,
            'image' => $path,
            'speakers' => $this->speakers($request),
        ]);

        return redirect()->route('admin.events')->with('success', 'Event created successfully');
        
    }

    public function attendees($id){
        $event = Events::find($id)->load('attendees');
        return view('admin.events.attendees',compact('event'));
    }

  
    public function edit($id)
    {
        $categories = EventCategories::orderBy('name')->get();
        $event = Events::find($id);
        return view('admin.events.edit',compact('event','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Events $event)
    {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'location' => 'required',
            'city' => 'required',
            'description' => 'required',
            'schedule' => 'required',
            'category' => 'required',
            'speakers_name.*' => 'required',
            'speakers_role.*' => 'required',
            'speakers_image.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'speakers_company.*' => 'required',
        ]);

        $path = $request->has('image') ? $request->file('image')->store('professionals', 'public') : $event->image;

        if ($request->has('image')) {
            $this->deleteImage($event->image);
        }

        $event->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category_id' => $request->category,
            'date' => $request->date,
            'location' => $request->location,
            'city' => $request->city,
            'description' => $request->description,
            'schedule' => $request->schedule,
            'image' => $path,
            'speakers' => $this->updateSpeakers($request,$event),
        ]);

        return redirect()->route('admin.events')->with('success', 'Event updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Events $event)
    {
        $this->deleteImage($event->image);
        $this->deleteSpeakerImages($event->speakers);
        $event->attendees()->delete();
        $event->delete();
        return redirect()->route('admin.events')->with('success', 'Event deleted successfully');
    }
}
