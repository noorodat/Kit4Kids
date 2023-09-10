<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KitController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Auth\SocialLoginController;

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\ContactController;
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

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// login by google
Route::get('auth/{provider}/redirect', [SocialLoginController::class, 'redirect'])->name('auth.socilaite.redirect');
Route::get('auth/{provider}/callback', [SocialLoginController::class, 'callback'])->name('auth.socilaite.callback');

/* ---------------START PAGES ROUTES--------------- */

// about us page
Route::get('w', function() {
    return view('welcomeL');
});
// login
Route::get('login', function() {
    return view('auth.login');
})->name('login');

// signup
Route::get('signup', function() {
    return view('auth.register');
})->name('signup');

// about us page
Route::get('pages/about', function() {
    return view('pages.about.about');
})->name('go-about');

// Show kits based on the category (discuss it with the team)
Route::get('pages/causes/{cat_id}', [KitController::class, 'showAll'])->name('go-causes');

// Show single kit
Route::get('pages/causes/{cat_id}/{kit}/cause-single', [KitController::class, 'showSingleKit'])->name('go-cause-single');

// Contact us page
Route::get('pages/contact', [ContactController::class, 'contact'])->name('go-contact');
Route::post('/message_sent', [ContactController::class, 'sendEmail'])->name('contact.send');

// Donate us page
Route::get('pages/causes/{kit_id}/donate', function() {
    return view('pages.donate.donate');
})->name('go-donate');

//Paypal
Route::get('/success', [PaymentController::class, 'success']);
Route::post('pay' ,[PaymentController::class, 'pay'])->name('payment');

// Events page
Route::get('pages/events}', [CampaignController::class, 'index'])->name('go-events');

// Event-single page
Route::get('pages/events/{campaign}/event-single', [CampaignController::class, 'showSingleCampaign'])->name('go-event-single');


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

Route::resource('campaigns', CampaignController::class);

Route::resource('dashboard/donations', DonationController::class);

Route::resource('dashboard/users', ProfileController::class);

Route::get('/categories', function () {
    return view('dashboard.categories.index');
})->name('dashboard.categories.index');


// Route::get('/campaign', function () {
//     return view('dashboard.campaign.index');
// })->name('dashboard.campaign.index');

// Route::get('/donations', function () {
//     return view('dashboard.donations.index');
// })->name('dashboard.donations.index');

Route::get('/kits', function () {
    return view('dashboard.kits.index');
})->name('dashboard.kits.index');

// ------ ENDS Routes for DASHBOARD --------------------------------
// home page
Route::get('pages', [HomeController::class, 'index'])->name('go-home');

// Delete event when countdown is 0
Route::get('/delete-campaign/{campaign}', [CampaignController::class, 'delete'])->name('delete-campaign');
