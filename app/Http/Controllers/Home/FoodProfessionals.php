<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Professionals;
use Illuminate\Http\Request;

class FoodProfessionals extends Controller
{

    public function index(){
        $professionals = Professionals::all();
        return view('home.professionals', compact('professionals'));
    }


    public function professional($slug){

        $professional = Professionals::where('slug', $slug)->first();
        return view('home.single-professional', compact('professional'));
    }
}
