<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/* START PAGES ROUTES */

// home page
Route::get('pages', function() {
    return view('pages.index');
})->name('go-home');

// about us page
Route::get('pages/about', function() {
    return view('pages.about.about');
})->name('go-about');

// Causes page
Route::get('pages/causes', function() {
    return view('pages.causes.causes');
})->name('go-causes');

// Cause-single page
Route::get('pages/causes/cause-single', function() {
    return view('pages.causes.cause-single.cause-single');
})->name('go-cause-single');

// Contact us page
Route::get('pages/contact', function() {
    return view('pages.contact.contact');
})->name('go-contact');

// Donate us page
Route::get('pages/donate', function() {
    return view('pages.donate.donate');
})->name('go-donate');

// Events page
Route::get('pages/events', function() {
    return view('pages.events.events');
})->name('go-events');

// Event-single page
Route::get('pages/events/event-single', function() {
    return view('pages.events.event-single.event-single');
})->name('go-event-single');

// Volunteer page
Route::get('pages/volunteer', function() {
    return view('pages.volunteer.volunteer');
})->name('go-volunteer');

/* END PAGES ROUTES */
