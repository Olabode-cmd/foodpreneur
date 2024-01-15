<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\CourseCategory;
use App\Models\Courses;
use App\Models\Faq;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        $courses = Courses::latest()->paginate(12);
        $categories = CourseCategory::all();
        $faqs = Faq::orderBy('order', 'asc')->get();

        return view('home.courses', compact('courses', 'categories', 'faqs'));
    }

    public function course($slug){
        $course = Courses::where('slug', $slug)->first();
        $relatedCourses = Courses::where('category_id', $course->category_id)->where('id', '!=', $course->id)->latest()->take(4)->get();

        return view('home.single-course', compact('course', 'relatedCourses'));
    }
}
