<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Subscriber;
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

    public function newsletter(Request $request){
        $check = Subscriber::where('type','newsletter')->where('email', $request->email)->first();
        if(!$check){
            Subscriber::create([
                'email' => $request->email,
                'name' => null,
                'type' => 'newsletter'
            ]);

            return back()->with('success', 'You have successfully subscribed to our newsletter!');
        }

        return back()->with('error', 'You have already subscribed to our newsletter!');
    }

    public function community(Request $request){
        $check = Subscriber::where('type','community')->where('email', $request->email)->first();
        if(!$check){
            Subscriber::create([
                'email' => $request->email,
                'name' => null,
                'type' => 'community'
            ]);

            return back()->with('success', 'You have successfully subscribed to join our community!');
        }

        return back()->with('error', 'You have already subscribed to join our community!');
    }

    public function ebook(Request $request){
        $check = Subscriber::where('type','ebook')->where('email', $request->email)->first();
        if(!$check){
            Subscriber::create([
                'email' => $request->email,
                'name' => $request->name,
                'type' => 'ebook'
            ]);

            return back()->with('success', 'You have successfully subscribed for the ebook!');
        }

        return back()->with('error', 'You have already subscribed for the ebook!');
    }
}
