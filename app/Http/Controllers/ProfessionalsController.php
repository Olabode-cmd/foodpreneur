<?php

namespace App\Http\Controllers;

use App\Models\Professionals;
use App\Traits\Actions;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfessionalsController extends Controller
{
    use Actions;
    
    public function index()
    {
        $professionals = Professionals::latest()->get();
        return view('admin.professionals.index', compact('professionals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.professionals.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'location' => 'required',
            'description' => 'required',
            
        ]);
        $path = request()->file('image')->store('professionals', 'public');
        Professionals::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'role' => $request->role,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $path,
            'awards' => $request->awards,
            'philanthropy' => $request->philanthropy,
            'signature' => $request->signature,
            'tag' => $this->tags($request->tags),
            'achievements' => $this->achievements($request),
            'views' => 0,
            'socials' => $this->socials($request),
            'is_featured' => $request->is_featured
        ]);

        return redirect()->route('admin.professionals')->with('success', 'Professional created successfully');
    }

  
    public function edit($id)
    {
        $professional = Professionals::find($id);
        return view('admin.professionals.edit', compact('professional'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,Professionals $professionals)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'location' => 'required',
            'description' => 'required',
        ]);
        $path = $request->has('image') ? $request->file('image')->store('professionals', 'public') : $professionals->image;

        if ($request->has('image')) {
            $this->deleteImage($professionals->image);
        }
        $professionals->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'role' => $request->role,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $path,
            'awards' => $request->awards,
            'philanthropy' => $request->philanthropy,
            'signature' => $request->signature,
            'tag' => $this->tags($request->tags),
            'achievements' => $this->achievements($request),
            'socials' => $this->socials($request),
            'is_featured' => $request->is_featured
        ]);

        return redirect()->route('admin.professionals')->with('success', 'Professional updated successfully');
    }

    public function destroy($id)
    {
        $professionals = Professionals::find($id);
        $this->deleteImage($professionals->image);
        $professionals->delete();
        return redirect()->route('admin.professionals')->with('success', 'Professional deleted successfully');
    }
}
