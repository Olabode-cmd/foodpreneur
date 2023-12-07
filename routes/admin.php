<?php

use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin' )->group(function () {
    
    Route::get('/', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('admin.dashboard');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::prefix('courses')->group(function(){
            Route::get('',[CoursesController::class,'index'])->name('admin.courses');
            Route::get('create',[CoursesController::class,'create'])->name('admin.coursesCreate');
            Route::post('',[CoursesController::class,'store'])->name('admin.coursesStore');
            Route::get('edit/{id}',[CoursesController::class,'edit'])->name('admin.coursesEdit');
            Route::patch('/{id}',[CoursesController::class,'update'])->name('admin.coursesUpdate');
            Route::delete('/{id}',[CoursesController::class,'destroy'])->name('admin.coursesDestroy');
        });

        Route::prefix('courses_categories')->group(function(){
            Route::get('',[CoursesCategoryController::class,'index'])->name('admin.coursesCategory'); 
            Route::post('',[CoursesCategoryController::class,'store'])->name('admin.coursesCategoryStore');
            Route::get('{id}',[CoursesCategoryController::class,'edit'])->name('admin.coursesCategoryEdit');
            Route::patch('/{id}',[CoursesCategoryController::class,'update'])->name('admin.coursesCategoryUpdate');
            Route::get('/delete/{id}',[CoursesCategoryController::class,'destroy'])->name('admin.coursesCategoryDestroy');
        });

    });


});

