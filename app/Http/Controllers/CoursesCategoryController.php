<?php

namespace App\Http\Controllers;

use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CoursesCategoryController extends Controller
{
    public function index(){
        $categories = CourseCategory::latest()->get();
        return view('admin.courses.category',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
        ]);

        CourseCategory::create([
            'name' => $request->name,
            'status' => 'Active',
        ]);

        return redirect()->back()->with('success','Category Added Successfully');

    }

    public function edit($id){
        $category = CourseCategory::find($id);
        return response()->json($category);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'status' => 'required',
        ]);

        $category = CourseCategory::find($id);
        $category->update($request->all());

        return redirect()->back()->with('success','Category Updated Successfully');

    }

    public function destroy($id){
        $category = CourseCategory::find($id);
        $category->delete();
        return redirect()->back()->with('success','Category Deleted Successfully');
    }
}
