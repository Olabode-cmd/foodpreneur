<?php

namespace App\Http\Controllers;

use App\Models\FoodprocessingCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FoodprocessingCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = FoodprocessingCategories::latest()->get();
        return view('admin.foodprocessing.category',compact('categories'));
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        FoodprocessingCategories::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->back()->with('success','Category Added Successfully');
    }

    
    public function edit($id)
    {
        $category = FoodprocessingCategories::find($id);
        return response()->json($category);
    }

   
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = FoodprocessingCategories::find($id);
        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return redirect()->back()->with('success','Category Updated Successfully');
    }
 
    public function destroy($id)
    {
        $category = FoodprocessingCategories::find($id);
        $category->delete();
        return redirect()->back()->with('success','Category Deleted Successfully');
    }
}
