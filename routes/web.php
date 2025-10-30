<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EnquiryMailController;
use App\Http\Controllers\PsvPcvInspectionController;
use App\Http\Controllers\AdminPanel\AdminController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/fix-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cleared';
});

Route::get('/layouts', function () {
    return view('layouts.template');
});

Route::get('/', function () {
    return view('pages.amt-home');
});

Route::get('/about', function () {
    return view('pages.amt-about');
});

Route::get('/contact', function () {
    return view('pages.amt-contact');
});

Route::get('/fleet', function () {
    return view('pages.amt-fleet');
});

Route::get('/services', function () {
    return view('pages.amt-service');
});

Route::get('/terms-conditions', function () {
    return view('pages.amt-terms-conditions');
});

Route::get('/enquiry', function () {
    return view('pages.amt-enquiry');
});




Route::post('/contact-email', [ContactUsController::class, 'sendEmail'])->name('contact.email');
Route::post('/enquiry-email', [EnquiryMailController::class, 'sendEmail'])->name('enquiry.email');

// Route::post('/inspection-email', [PsvPcvInspectionController::class, 'sendEmail'])->name('inspection.email');


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/psv-pvc-inspection', [PsvPcvInspectionController::class, 'index'])->name('inspection.view');
    Route::post('/inspection-email', [PsvPcvInspectionController::class, 'sendEmail'])->name('inspection.email');

});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});