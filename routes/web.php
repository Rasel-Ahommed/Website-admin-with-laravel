<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\adminController\homeController;
use App\Http\Controllers\adminController\noticController;
use App\Http\Controllers\adminController\reportController;
use App\Http\Controllers\adminController\dashboardController;
use App\Http\Controllers\adminController\activitiesController;
use App\Http\Controllers\adminController\subscriberController;
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



Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified']);

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';


//////////// frontend view routes start/////////////////

Route::get('/', function () {
    return  view('frontend/index');
});
Route::get('/shmu-act', function () {
    return  view('frontend/shmu-act');
});
Route::get('/ins-code', function () {
    return  view('frontend/ins-code');
});
Route::get('/campus-detail', function () {
    return  view('frontend/campus-detail');
});
Route::get('/campus-map', function () {
    return  view('frontend/campus-map');
});
Route::get('/vision-mission', function () {
    return  view('frontend/vision-mission');
});
Route::get('/event', function () {
    return  view('frontend/event');
});
Route::get('/chancellor', function () {
    return  view('frontend/chancellor');
});
Route::get('/vice-chancellor', function () {
    return  view('frontend/vice-chancellor');
});
Route::get('/syndicate', function () {
    return  view('frontend/syndicate');
});
Route::get('/academic-council', function () {
    return  view('frontend/academic-council');
});
Route::get('/admin-council', function () {
    return  view('frontend/admin-council');
});
Route::get('/faculty-of-medicine', function () {
    return  view('frontend/faculty-of-medicine');
});
Route::get('/faculty-of-basic-science-and-para-clinical-science', function () {
    return  view('frontend/faculty-of-basic-science-and-para-clinical-science');
});
Route::get('/faculty-of-nursing', function () {
    return  view('frontend/faculty-of-nursing');
});
Route::get('/program-all', function () {
    return  view('frontend/program-all');
});
Route::get('/academmic-calender', function () {
    return  view('frontend/academmic-calender');
});
Route::get('/certificate', function () {
    return  view('frontend/certificate');
});
Route::get('/affiliated-institutions-government', function () {
    return  view('frontend/affiliated-institutions-government');
});
Route::get('/affiliated-institutions-non-government', function () {
    return  view('frontend/affiliated-institutions-non-government');
});
Route::get('/frontNotice', function () {
    return  view('frontend/notice');
});
Route::get('/event-gallary', function () {
    return  view('frontend/event-gallary');
});
Route::get('/noc', function () {
    return  view('frontend/noc');
});
Route::get('/apa', function () {
    return  view('frontend/apa');
});
Route::get('/tender', function () {
    return  view('frontend/tender');
});
Route::get('/career', function () {
    return  view('frontend/career');
});
Route::get('/form', function () {
    return  view('frontend/form');
});

////////////////// frontend route end /////////////////

/////////////////// admin route start /////////////////

Route::middleware('auth')->group(function () {
    // dashboard routes 
    Route::get('/dashboard', [dashboardController::class, 'Index']);

    //  home page routes 
    Route::get('/adminHome', [homeController::class, 'Index']);


// ----------------all submanus route from about--------------
// events route 
Route::get('/events', 'eventsController')->name('user');








    //notice routes
    Route::get('/notice', [noticController::class, 'Index']);
    Route::post('/notice', [noticController::class, 'Store'])->name('store.notice');
    Route::get('/edit/notice/{id}', [noticController::class, 'Edit'])->name('editNotice');
    Route::post('/edit/notice/{id}', [noticController::class, 'Update'])->name('update.notice');
    Route::get('/delete/notice/{id}', [noticController::class, 'Destroy'])->name('delete');

    //activities routes
    Route::get('/activities', [activitiesController::class, 'Index']);

    //subscribe routes
    Route::get('/subscriber', [subscriberController::class, 'Index']);

    //report routes
    Route::get('/report', [reportController::class, 'Index']);
});


                            // admin route end 