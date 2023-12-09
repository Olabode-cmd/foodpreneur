<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('admin.content.faq',compact('faqs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'question' =>'required',
            'answer' =>'required',
            'order' =>'required',
        ]);

        Faq::create($request->all());

        return redirect()->back()->with('success','FAQ has been added');
    }

   
    public function edit($id)
    {
        $faq = Faq::find($id);
        return response()->json($faq);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'question' =>'required',
            'answer' =>'required',
            'order' =>'required',
        ]);

        $faq = Faq::find($id);
        $faq->update($request->all());

        return redirect()->back()->with('success','Faq Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $FAQ = Faq::find($id);
        $FAQ->delete();
        return redirect()->back()->with('success','FAQ Deleted Successfully');
    }
}
