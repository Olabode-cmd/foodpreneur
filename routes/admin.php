<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
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
            Route::get('edit/{course}',[CoursesController::class,'edit'])->name('admin.coursesEdit');
            Route::patch('/{id}',[CoursesController::class,'update'])->name('admin.coursesUpdate');
            Route::get('/delete/{courses}',[CoursesController::class,'destroy'])->name('admin.coursesDestroy');
        });

        Route::prefix('courses_categories')->group(function(){
            Route::get('',[CoursesCategoryController::class,'index'])->name('admin.coursesCategory');
            Route::post('',[CoursesCategoryController::class,'store'])->name('admin.coursesCategoryStore');
            Route::get('{id}',[CoursesCategoryController::class,'edit'])->name('admin.coursesCategoryEdit');
            Route::patch('/{id}',[CoursesCategoryController::class,'update'])->name('admin.coursesCategoryUpdate');
            Route::get('/delete/{id}',[CoursesCategoryController::class,'destroy'])->name('admin.coursesCategoryDestroy');
        });

        Route::prefix('blogs')->group(function(){
            Route::get('',[BlogController::class,'index'])->name('admin.blogs');
            Route::get('create',[BlogController::class,'create'])->name('admin.blogsCreate');
            Route::post('',[BlogController::class,'store'])->name('admin.blogsStore');
            Route::get('edit/{blog}',[BlogController::class,'edit'])->name('admin.blogsEdit');
            Route::patch('/{id}',[BlogController::class,'update'])->name('admin.blogsUpdate');
            Route::get('/delete/{blog}',[BlogController::class,'destroy'])->name('admin.blogsDestroy');
        });

        Route::prefix('blogs_categories')->group(function(){
            Route::get('',[BlogCategoryController::class,'index'])->name('admin.blogsCategory');
            Route::post('',[BlogCategoryController::class,'store'])->name('admin.blogsCategoryStore');
            Route::get('{blog}',[BlogCategoryController::class,'edit'])->name('admin.blogsCategoryEdit');
            Route::patch('/{id}',[BlogCategoryController::class,'update'])->name('admin.blogsCategoryUpdate');
            Route::get('/delete/{id}',[BlogCategoryController::class,'destroy'])->name('admin.blogsCategoryDestroy'); 
        });

        Route::get('subscribers',[SubscriberController::class,'index'])->name('admin.subscribers');

    });


});

