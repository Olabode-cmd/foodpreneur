<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Community;
use App\Models\Courses;
use App\Models\EventCategories;
use App\Models\Events;
use App\Models\Subscriber;
use App\Models\Testimonials;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $blogs = Blog::latest('created_at')->with('category')->take(3)->get();
        $testimonials = Testimonials::latest('created_at')->take(3)->get();
        $courses = Courses::latest('created_at')->take(5)->get();
        $events = Events::latest('created_at')->take(3)->get();
        $eventCategories = EventCategories::all();
        return view('home.index', compact('blogs', 'testimonials', 'courses', 'events', 'eventCategories'));
    }

    public function about(){
        return view('home.about');
    }

    public function blogs(){
        $blogs = Blog::latest('created_at')->with('category')->paginate(9);
        $blogsCategories = BlogCategory::all();
        $trending = Blog::latest()->where('is_trending', 1)->with('category')->take(3)->get();
        return view('home.blogs', compact('blogs', 'blogsCategories', 'trending'));
    }

    public function blog($slug){
        $blog = Blog::where('slug', $slug)->first();

        if (!$blog) {
            abort(404); // or handle accordingly if the blog is not found
        }
        $relatedBlogs = Blog::where('category_id', $blog->category_id)
                    ->where('id', '!=', $blog->id)
                    ->inRandomOrder() // Order by random
                    ->take(3)
                    ->get();
        return view('home.single-blog', compact('blog', 'relatedBlogs'));
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
        $request->validate([
            'email' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'country' => 'required',
            'work' => 'required',
            'city' => 'required',
        ]);
        $check = Community::where('email', $request->email)->first();
        
        if(!$check){
            Community::create($request->all());

            return back()->with('success', 'You have successfully subscribed to join our community!');
        }

        return back()->with('error', 'You have already subscribed to join our community!');
    }

    public function communityView(){
        return view('home.community');
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
