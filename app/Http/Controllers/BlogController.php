<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Traits\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    use Actions;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->with('category')->get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = BlogCategory::orderBy('name', 'asc')->get();
        return view('admin.blogs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'author' => 'required',
            'author_role' => 'required',
            // 'author_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $path = $request->file('image')->store('blogs', 'public');
        $author_image = $request->has('author_image') ? $request->file('author_image')->store('author', 'public') : null;
        Blog::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category_id' => $request->category,
            'image' => $path,
            'tag' => $this->tags($request->tags),
            'author' => $request->author,
            'author_role' => $request->author_role,
            'author_image' => $author_image,
            'views' => 0
        ]);

        return redirect()->route('admin.blogs')->with('success', 'Blog created successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
