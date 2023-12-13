<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use App\Traits\Actions;
use Illuminate\Http\Request;

class TestimonialsController extends Controller
{
    use Actions;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials =  Testimonials::latest()->get();
        return view('admin.content.testimonials',compact('testimonials'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'location' =>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'rating' =>'required',
            'description' =>'required',
        ]);

        $path = $request->file('image')->store('testimonials','public');
        Testimonials::create([
            'name' =>$request->name,
            'location' =>$request->location,
            'description' =>$request->description,
            'rating' =>$request->rating,
            'image' =>$path,
        ]);

        return redirect()->back()->with('success','Testimonial has been added');
    }

    
    public function edit($id)
    {
        $testimonials = Testimonials::find($id);
        return response()->json($testimonials);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'location' =>'required', 
            'rating' =>'required',
            'description' =>'required',
        ]);
        
        $testimonials = Testimonials::find($id);
        $path = $request->has('image') ? $request->file('image')->store('testimonials', 'public') : $testimonials->image; 
        if($request->has('image') ){
            // delete old image
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $this->deleteImage($testimonials->image); 
        }
        $testimonials->update([
            'name' =>$request->name,
            'location' =>$request->location,
            'description' =>$request->description,
            'rating' =>$request->rating,
            'image' =>$path,
        ]);
        return redirect()->back()->with('success','Testimonial Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonials $testimonials)
    {
        $this->deleteImage($testimonials->image);
        $testimonials->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully');
    }
}
