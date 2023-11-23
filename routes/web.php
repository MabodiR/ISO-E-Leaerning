<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Main page
Route::get('/', [CourseController::class, 'main']);
Route::get('/home', [CourseController::class, 'main']);

// get categories
Route::get('/getcourses/{category}', [CourseController::class, 'getbycategory']);



//Auth route
Auth::routes();

// course index route
Route::get('/courses', function () {
    return view('courses.index');
});

// view create route
Route::get('/course/create', function () {
    return view('courses.create');
});

//view my courses
Route::get('/my-courses', function () {
    return view('courses.mycourses');
});

// get single course route
Route::get('/course/{id}', [CourseController::class, 'getcourse'])->name('courses.show');;
//store courses to db
Route::post('/courses', [CourseController::class, 'store']);

//get my courses
Route::get('/mycourses', [CourseController::class, 'mycourses']);

//delete my courses
Route::delete('/delete-course/{id}', [CourseController::class, 'destroy']);

//edit my course
Route::post('/update/{id}', [CourseController::class, 'update']);
Route::get('/course/edit/{id}', [CourseController::class, 'edit']);

//store ratings to db
Route::post('/ratings', [RatingController::class, 'store']);


//store comments to db
Route::post('/comments', [CommentController::class, 'store']);

// Other pages routes
Route::get('/{page}', function ($page) {
    $viewPath = "pages.$page";

    if (view()->exists($viewPath)) {
        return view($viewPath);
    } else {
        return view('404');
    }
})->where('page', '.*');