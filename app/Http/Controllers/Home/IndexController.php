<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function blogs(){
        $blogs = Blog::latest()->get();
        $blogsCategories = BlogCategory::all();

        return view('home.blogs', compact('blogs', 'blogsCategories'));
    }

    public function blog($slug){

        $blog = Blog::where('slug', $slug)->first();
        $blogsCategories = BlogCategory::all();

        return view('home.single-blog', compact('blog', 'blogsCategories'));
    }
}
