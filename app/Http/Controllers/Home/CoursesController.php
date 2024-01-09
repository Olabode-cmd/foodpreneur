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
        $courses = Courses::all();
        $categories = CourseCategory::all();
        $faqs = Faq::orderBy('order', 'asc')->get();

        return view('home.courses', compact('courses', 'categories', 'faqs'));
    }

    public function course($slug){
        $course = Courses::where('slug', $slug)->first();
        $categories = CourseCategory::all();
        $faq = Faq::orderBy('order', 'asc')->get();

        return view('home.single-course', compact('course', 'categories', 'faq'));
    }
}
