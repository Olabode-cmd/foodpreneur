<?php

namespace App\Http\Controllers;

use App\Models\EventCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventsCategoriesController extends Controller
{
    public function index(){
        $events = EventCategories::latest()->get();
        return view('admin.events.category',compact('events'));
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
        ]);

        EventCategories::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('success', 'Category Added Successfully');
    }

    public function edit($id){
        $category = EventCategories::find($id);
        return response()->json($category);
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
        ]);

        EventCategories::find($id)->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);

        return back()->with('success', 'Category Updated Successfully');
        
    }

    public function destroy($id){
        EventCategories::find($id)->delete();
        return back()->with('success', 'Category Deleted Successfully');
    }
}
