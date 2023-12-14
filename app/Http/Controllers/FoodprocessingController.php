<?php

namespace App\Http\Controllers;

use App\Models\Foodprocessing;
use App\Models\FoodprocessingCategories;
use App\Traits\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FoodprocessingController extends Controller
{
    use Actions;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foodprocessings = Foodprocessing::latest()->with('categories')->get();
        // dd($foodprocessings);
        return view('admin.foodprocessing.index', compact('foodprocessings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = FoodprocessingCategories::orderBy('name', 'asc')->get();
        return view('admin.foodprocessing.create', compact('categories'));
    }

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

        $path = $request->file('image')->store('foodprocessings', 'public');
        $author_image = $request->has('author_image') ? $request->file('author_image')->store('author', 'public') : null;

        Foodprocessing::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category' => $request->category,
            'tag' => $this->tags($request->tags),
            'image' => $path,
            'author' => $request->author,
            'author_role' => $request->author_role,
            'author_image' => $author_image,
            'views' => 0
        ]);

        return redirect()->route('admin.processing')->with('success', 'Food processing created successfully');
    }

    
    public function edit(Foodprocessing $foodprocessing)
    {
        $categories = FoodprocessingCategories::orderBy('name', 'asc')->get();
        return view('admin.foodprocessing.edit', compact('foodprocessing', 'categories'));
    }

     
    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tags' => 'required',
            'author' => 'required',
            'author_role' => 'required',
            // 'author_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $foodprocessing = Foodprocessing::find($request->id);
        $path = $request->has('image') ? $request->file('image')->store('foodprocessings', 'public') : $foodprocessing->image;
        $author_image = $request->has('author_image') ? $request->file('author_image')->store('author', 'public') : $foodprocessing->author_image;
        if($request->has('image') || $request->has('author_image')){
            // delete old image
            $this->deleteImage($foodprocessing->image);
            $this->deleteImage($foodprocessing->author_image);
        }

        $foodprocessing->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
            'category' => $request->category,
            'tag' => $this->tags($request->tags),
            'image' => $path,
            'author' => $request->author,
            'author_role' => $request->author_role,
            'author_image' => $author_image,

        ]);

        return redirect()->route('admin.processing')->with('success', 'Food processing updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $foodprocessing = Foodprocessing::find($id);
        $this->deleteImage($foodprocessing->image);
        $this->deleteImage($foodprocessing->author_image);
        $foodprocessing->delete();
        return redirect()->route('admin.processing')->with('success', 'Food processing deleted successfully');
    }
}
