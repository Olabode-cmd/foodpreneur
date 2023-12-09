<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use App\Models\Courses;
use App\Traits\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CoursesController extends Controller
{
    use Actions;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Courses::latest()->with('category')->get();
        return view('admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = CourseCategory::orderBy('name', 'asc')->get();
        return view('admin.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'author' => 'required',
            'students' => 'required',
            'duration' => 'required',
            'rating' => 'required',
            'url' => 'required',
        ]);

        $path  = $request->file('image')->store('courses', 'public');
        // convert tags to array
        
        Courses::create([
            'name' => $request->name,
            'slug' =>Str::slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category,
            'price' => $request->price,
            'image' => $path,
            'tag' => $this->tags($request->tags),
            'author' => $request->author,
            'students' => $request->students,
            'time' => $request->duration,
            'rating' => $request->rating,
            'url' => $request->url,
            'views' => 0
        ]);

        return redirect()->route('admin.courses')->with('success', 'Course created successfully');
    }

   
    
    public function edit(Courses $course)
    {
        $categories = CourseCategory::orderBy('name', 'asc')->get();
        return view('admin.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'tags' => 'required',
            'author' => 'required',
            'students' => 'required',
            'duration' => 'required',
            'rating' => 'required',
            'url' => 'required',
        ]);

        $courses = Courses::find($request->id);
        $path = $request->has('image') ? $request->file('image')->store('courses', 'public') : $courses->image;
        if($request->has('image')){
            // delete old image
            if($courses->image){
               $this->deleteImage($courses->image);
            }
        }
        $courses->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category,
            'price' => $request->price,
            'image' => $path,
            'tag' => $this->tags($request->tags),
            'author' => $request->author,
            'students' => $request->students,
            'time' => $request->duration,
            'rating' => $request->rating,
            'url' => $request->url,
        ]);

        return redirect()->back()->with('success', 'Course updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Courses $courses)
    {
        $this->deleteImage($courses->image);
        $courses->delete();
        return redirect()->back()->with('success', 'Course deleted successfully');
    }
}
