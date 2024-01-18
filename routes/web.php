<?php

use App\Http\Controllers\Home\CoursesController;
use App\Http\Controllers\Home\EventController;
use App\Http\Controllers\Home\FoodProfessionals;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('welcome');
Route::get('/about', [IndexController::class, 'about'])->name('home.about');
Route::get('upcoming-events', [EventController::class, 'index'])->name('home.events');
Route::get('events/{event}', [EventController::class, 'event'])->name('home.event');
Route::get('events/{event}/register', [EventController::class, 'register'])->name('home.event.register');
Route::get('blogs', [IndexController::class, 'blogs'])->name('home.blogs');
Route::get('blogs/{blog}', [IndexController::class, 'blog'])->name('home.blog');
Route::get('courses', [CoursesController::class, 'index'])->name('home.courses');
Route::get('courses/{course}', [CoursesController::class, 'course'])->name('home.course');
Route::get('food-professionals', [FoodProfessionals::class, 'index'])->name('home.foodProfessionals');
Route::get('food-professionals/{professional}', [FoodProfessionals::class, 'professional'])->name('home.professional');

Route::post('newsletter', [IndexController::class, 'newsletter'])->name('home.newsletter');
Route::post('community', [IndexController::class, 'community'])->name('home.community');
Route::post('ebook', [IndexController::class, 'ebook'])->name('home.ebook');


Route::prefix('admin' )->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});




require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
