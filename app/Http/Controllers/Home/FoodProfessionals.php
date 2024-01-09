<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Professionals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoodProfessionals extends Controller
{

    public function index(){
        $professionals = DB::table('professionals')->orderByRaw('RAND()')->take(6)->get();
        $featuredProfessionals = Professionals::where('is_featured', 1)->get();
        $professionalOfTheDay = DB::table('professionals')->orderByRaw('RAND()')->where('is_entrepreneur', 1)->take(3)->get();
        return view('home.professionals', compact('professionals', 'professionalOfTheDay', 'featuredProfessionals'));
    }


    public function professional($slug){

        $professional = Professionals::where('slug', $slug)->first();
        return view('home.single-professional', compact('professional'));
    }
}
