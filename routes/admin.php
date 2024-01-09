<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursesCategoryController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\EventsCategoriesController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FoodprocessingCategoriesController;
use App\Http\Controllers\FoodprocessingController;
use App\Http\Controllers\ProfessionalsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\SuccessStoriesController;
use App\Http\Controllers\TestimonialsController;
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

        Route::prefix('professionals')->group(function(){
            Route::get('',[ProfessionalsController::class,'index'])->name('admin.professionals');
            Route::get('create',[ProfessionalsController::class,'create'])->name('admin.professionalsCreate');
            Route::post('',[ProfessionalsController::class,'store'])->name('admin.professionalsStore');
            Route::get('edit/{professionals}',[ProfessionalsController::class,'edit'])->name('admin.professionalsEdit');
            Route::patch('/{professionals}',[ProfessionalsController::class,'update'])->name('admin.professionalsUpdate');
            Route::get('/delete/{professionals}',[ProfessionalsController::class,'destroy'])->name('admin.professionalsDestroy');
            Route::get('of-the-day',[ProfessionalsController::class,'ofTheday'])->name('admin.professionalsOfTheday');
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

        Route::prefix('events')->group(function(){
            Route::get('',[EventsController::class,'index'])->name('admin.events');
            Route::get('create',[EventsController::class,'create'])->name('admin.eventsCreate');
            Route::post('',[EventsController::class,'store'])->name('admin.eventsStore');
            Route::get('edit/{event}',[EventsController::class,'edit'])->name('admin.eventsEdit');
            Route::get('attendees/{event}',[EventsController::class,'attendees'])->name('admin.eventsAttendees');
            Route::patch('/{event}',[EventsController::class,'update'])->name('admin.eventsUpdate');
            Route::get('/delete/{event}',[EventsController::class,'destroy'])->name('admin.eventsDestroy');
        });

        Route::prefix('events_categories')->group(function(){
            Route::get('',[EventsCategoriesController::class,'index'])->name('admin.eventsCategory');
            Route::post('',[EventsCategoriesController::class,'store'])->name('admin.eventsCategoryStore');
            Route::get('{id}',[EventsCategoriesController::class,'edit'])->name('admin.eventsCategoryEdit');
            Route::patch('/{id}',[EventsCategoriesController::class,'update'])->name('admin.eventsCategoryUpdate');
            Route::get('/delete/{id}',[EventsCategoriesController::class,'destroy'])->name('admin.eventsCategoryDestroy'); 
        });

        Route::prefix('food/processing')->group(function(){
            Route::prefix('categories')->group(function(){
                Route::get('',[FoodprocessingCategoriesController::class,'index'])->name('admin.processingCategory');
                Route::post('',[FoodprocessingCategoriesController::class,'store'])->name('admin.processingCategoryStore');
                Route::get('{processing}',[FoodprocessingCategoriesController::class,'edit'])->name('admin.processingCategoryEdit');
                Route::patch('/{id}',[FoodprocessingCategoriesController::class,'update'])->name('admin.processingCategoryUpdate');
                Route::get('/delete/{id}',[FoodprocessingCategoriesController::class,'destroy'])->name('admin.processingCategoryDestroy');
            });

            Route::get('',[FoodprocessingController::class,'index'])->name('admin.processing');
            Route::get('create',[FoodprocessingController::class,'create'])->name('admin.processingCreate');
            Route::post('',[FoodprocessingController::class,'store'])->name('admin.processingStore');
            Route::get('edit/{foodprocessing}',[FoodprocessingController::class,'edit'])->name('admin.processingEdit');
            Route::patch('/{id}',[FoodprocessingController::class,'update'])->name('admin.processingUpdate');
            Route::get('/delete/{processing}',[FoodprocessingController::class,'destroy'])->name('admin.processingDestroy');

        });

        Route::get('subscribers',[SubscriberController::class,'index'])->name('admin.subscribers');
        Route::prefix('pages')->group(function(){
            Route::prefix('success-stories')->group(function(){
                Route::get('',[SuccessStoriesController::class,'index'])->name('admin.successStories');
                Route::post('',[SuccessStoriesController::class,'store'])->name('admin.successStoriesStore');
                Route::get('edit/{successStories}',[SuccessStoriesController::class,'edit'])->name('admin.successStoriesEdit');
                Route::patch('/{id}',[SuccessStoriesController::class,'update'])->name('admin.successStoriesUpdate');
                Route::get('/delete/{successStories}',[SuccessStoriesController::class,'destroy'])->name('admin.successStoriesDestroy');
            });

            Route::prefix('testimonials')->group(function(){
                Route::get('',[TestimonialsController::class,'index'])->name('admin.testimonials');
                Route::post('',[TestimonialsController::class,'store'])->name('admin.testimonialStore');
                Route::get('edit/{testimonials}',[TestimonialsController::class,'edit'])->name('admin.testimonialEdit');
                Route::patch('/{id}',[TestimonialsController::class,'update'])->name('admin.testimonialUpdate');
                Route::get('/delete/{testimonials}',[TestimonialsController::class,'destroy'])->name('admin.testimonialDestroy');
            });

            Route::prefix('faqs')->group(function(){
                Route::get('',[FaqController::class,'index'])->name('admin.faqs');
                Route::post('',[FaqController::class,'store'])->name('admin.faqStore');
                Route::get('/edit/{id}',[FaqController::class,'edit'])->name('admin.faqEdit');
                Route::patch('/{id}',[FaqController::class,'update'])->name('admin.faqUpdate');
                Route::get('/delete/{faqs}',[FaqController::class,'destroy'])->name('admin.faqDestroy');
            });
        });
    });


});

