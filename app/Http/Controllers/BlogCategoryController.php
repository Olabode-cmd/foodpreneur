<?php

namespace App\Http\Controllers;

use App\Models\BlogCategory;
use Illuminate\Http\Request;

class BlogCategoryController extends Controller
{
    
    public function index()
    {
        $blogs = BlogCategory::latest()->get();
        return view('admin.blogs.category',compact('blogs'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        BlogCategory::create([
            'name' => $request->name,
            'status' => 'Active',
        ]);

        return redirect()->back()->with('success','Category Added Successfully');

    }
    public function edit($id)
    {
        $category = BlogCategory::find($id);
        return response()->json($category);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);
        $category = BlogCategory::find($id);
        $category->update($request->all());
        return redirect()->back()->with('success','Category Updated Successfully');
    }

}
