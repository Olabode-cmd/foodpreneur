<?php

namespace App\Http\Controllers;

use App\Models\SuccessStories;
use Illuminate\Http\Request;

class SuccessStoriesController extends Controller
{
   
    public function index()
    {
        $stories =  SuccessStories::latest()->get();
        return view('admin.content.successtories',compact('stories'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'role' =>'required',
            'description' =>'required',
        ]);

        SuccessStories::create($request->all());

        return redirect()->back()->with('success','SuccessStories has been added');
    }

    public function edit($id)
    {
        $story = SuccessStories::find($id);
        return response()->json($story);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' =>'required',
            'role' =>'required',
            'description' =>'required',
        ]);

        $story = SuccessStories::find($id);
        $story->update($request->all());

        return redirect()->back()->with('success','Story Updated Successfully');
    }

   
    public function destroy($id)
    {
        $story = SuccessStories::find($id);
        $story->delete();
        return redirect()->back()->with('success','Story Deleted Successfully');
    }
}
