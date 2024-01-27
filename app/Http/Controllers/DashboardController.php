<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Community;
use App\Models\Courses;
use Illuminate\Http\Request;
use App\Models\Events;
use App\Models\Faq;

class DashboardController extends Controller
{

    public function __invoke()
    {
        $events = Events::all();
        $communityUsers = Community::all();
        $foodprofessionals = Community::all();
        $blogs = Blog::all();
        $courses = Courses::all();
        $faq = Faq::all();
        return view('admin.dashboard',compact('events','communityUsers','foodprofessionals','blogs','courses','faq'));
    }
    public function index(){
       $events = Events::all();
        $communityUsers = Community::all();
        $foodprofessionals = Community::all();
        $blogs = Blog::all();
        $courses = Courses::all();
        $faq = Faq::all();
        return view('admin.dashboard',compact('events','communityUsers','foodprofessionals','blogs','courses','faq'));
    }
}
