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
            'slashed_price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'author' => 'required',
            'students' => 'required',
            'rating' => 'required',
            'url' => 'required',
            'course_duration' => 'required',
            'course_reason' => 'required',
            'author_description' => 'required',
            'author_image' => 'required',
            'author_role' => 'required',
            'author' => 'required',
        ]);

        // dd($request->all());
        $path  = $request->file('image')->store('courses', 'public');
        $author_image = $request->file('author_image')->store('author', 'public');
        // convert tags to array
        
        Courses::create([
            'name' => $request->name,
            'slug' =>Str::slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category,
            'price' => $request->price,
            'slashed_price' => $request->slashed_price,
            'image' => $path,
            'tag' => $this->tags($request->tags),
            'author' => $request->author,
            'students' => $request->students,
            'rating' => $request->rating,
            'url' => $request->url,
            'views' => 0,
            'author_image' => $author_image,
            'author_role' => $request->author_role,
            'author_description' => $request->author_description,
            'author_name' => $request->author,
            'duration' => $request->course_duration,
            'reason' => $request->course_reason,
            'course_lectures' => $request->course_lectures,
            'course_hours' => $request->course_hours,
            'course_sections' => $request->course_sections
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
            'slashed_price' => 'required',
            'tags' => 'required',
            'author' => 'required',
            'students' => 'required',
            'rating' => 'required',
            'url' => 'required',
            'course_duration' => 'required',
            'course_reason' => 'required',
            'author_description' => 'required',
            'author_role' => 'required',
            'author' => 'required',
        ]);

        $courses = Courses::find($request->id);
        $banner = $request->has('image') ? $request->file('image')->store('courses', 'public') : $courses->image;
        $author_image = $request->has('author_image') ? $request->file('author_image')->store('author', 'public') : $courses->author_image;

        $courses->update([
            'name' => $request->name,
            'slug' =>Str::slug($request->name),
            'description' => $request->description,
            'category_id' => $request->category,
            'price' => $request->price,
            'slashed_price' => $request->slashed_price,
            'image' => $banner,
            'tag' => $this->tags($request->tags),
            'author' => $request->author,
            'students' => $request->students,
            'rating' => $request->rating,
            'url' => $request->url,
            'views' => $request->views,
            'author_image' => $author_image,
            'author_role' => $request->author_role,
            'author_description' => $request->author_description,
            'author_name' => $request->author,
            'duration' => $request->course_duration,
            'reason' => $request->course_reason,
            'course_lectures' => $request->course_lectures,
            'course_hours' => $request->course_hours,
            'course_sections' => $request->course_sections
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
