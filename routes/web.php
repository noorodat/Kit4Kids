<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KitController;
use App\Http\Controllers\AdminController;

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

/* ---------------START PAGES ROUTES--------------- */

// home page
Route::get('pages', function() {
    return view('pages.index');
})->name('go-home');

// about us page
Route::get('pages/about', function() {
    return view('pages.about.about');
})->name('go-about');

// Show kits based on the category
Route::get('pages/causes/{cat_id}', [KitController::class, 'showAll'])->name('go-causes');

// Show single kit
Route::get('pages/causes/{kit_id}/cause-single', [KitController::class, 'showSingleKit'])->name('go-cause-single');

// Contact us page
Route::get('pages/contact', function() {
    return view('pages.contact.contact');
})->name('go-contact');

// Donate us page
Route::get('pages/causes/{kit_id}/donate', function() {
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
Route::get('/tables', function () {
    return view('dashboard.dashboard_layouts.tables');
});

/* ---------------END PAGES ROUTES--------------- */

// ------ START Routes for DASHBOARD --------------------------------
Route::get('/users', function () {
    return view('dashboard.users.index');
})->name('dashboard.users.index');


// Route::get('/admins', function () {
//     return view('dashboard.admins.index');
// })->name('dashboard.admins.index');

// Route::get('/admins.create', function () {
//     return view('dashboard.admins.create');
// })->name('dashboard.admins.create');

// Route::get('/admin_index', [AdminController::class, 'index'])->name('dashboard.admins.index');

// Route:: view('dashboardadmins' , 'dashboard.admins.index');

Route::resource('admins', AdminController::class);

Route::resource('dashboard/users', ProfileController::class);

Route::get('/categories', function () {
    return view('dashboard.categories.index');
})->name('dashboard.categories.index');


Route::get('/campaign', function () {
    return view('dashboard.campaign.index');
})->name('dashboard.campaign.index');

Route::get('/donations', function () {
    return view('dashboard.donations.index');
})->name('dashboard.donations.index');

Route::get('/kits', function () {
    return view('dashboard.kits.index');
})->name('dashboard.kits.index');

// ------ ENDS Routes for DASHBOARD --------------------------------