<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EnquiryMailController;
use App\Http\Controllers\PsvPcvInspectionController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProfileController;
/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider and all of them will | be assigned to the "web" middleware group. Make something great! | */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('config:cache');
    return 'DONE'; //Return anything
});

Route::get('/fix-cache', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return 'Cleared';
});

// Permanent (301) redirects from un-prefixed URLs to the English pages,
// so search engines index one canonical /en/... URL per page.
Route::permanentRedirect('/', '/en');

foreach ([
    'about',
    'contact',
    'fleet',
    'services',
    'terms-conditions',
    'enquiry',
    'airport-transfers-london',
    'corporate-coach-hire-london',
    'school-trips-coach-hire-london',
    'minibus-hire-london',
    'private-coach-hire-london',
    'rail-replacement-coach-hire',
] as $page) {
    Route::permanentRedirect("/{$page}", "/en/{$page}");
}

// French and Tamil are not offered on the site; send any old links to English.
Route::get('/{oldLocale}/{path?}', function ($oldLocale, $path = '') {
    return redirect('/en' . ($path !== '' ? "/{$path}" : ''), 301);
})->where(['oldLocale' => 'fr|ta', 'path' => '.*']);

Route::group([
    'prefix' => '{locale}',
    'middleware' => 'setLocale',
    'where' => ['locale' => 'en|ko']
], function () {

    Route::get(
        '/',
        function () {
            return view('pages.amt-home');
        }
    );

    Route::get(
        '/about',
        function () {
            return view('pages.amt-about');
        }
    );

    Route::get(
        '/contact',
        function () {
            return view('pages.amt-contact');
        }
    );

    Route::get(
        '/fleet',
        function () {
            return view('pages.amt-fleet');
        }
    );

    Route::get(
        '/services',
        function () {
            return view('pages.amt-service');
        }
    );

    Route::get(
        '/terms-conditions',
        function () {
            return view('pages.amt-terms-conditions');
        }
    );

    Route::get(
        '/enquiry',
        function () {
            return view('pages.amt-enquiry');
        }
    );

    Route::get(
        '/airport-transfers-london',
        function () {
            return view('pages.amt-airport-transfers-london');
        }
    );

    Route::get(
        '/corporate-coach-hire-london',
        function () {
            return view('pages.amt-corporate-coach-hire-london');
        }
    );

    Route::get(
        '/school-trips-coach-hire-london',
        function () {
            return view('pages.amt-school-trips-coach-hire-london');
        }
    );

    Route::view('/minibus-hire-london', 'pages.amt-minibus-hire-london');
    Route::view('/private-coach-hire-london', 'pages.amt-private-coach-hire-london');
    Route::view('/rail-replacement-coach-hire', 'pages.amt-rail-replacement-coach-hire');
});

Route::post('/contact-email', [ContactUsController::class, 'sendEmail'])->name('contact.email');
Route::post('/enquiry-email', [EnquiryMailController::class, 'sendEmail'])->name('enquiry.email');

// Route::post('/inspection-email', [PsvPcvInspectionController::class, 'sendEmail'])->name('inspection.email');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/psv-pvc-inspection', [PsvPcvInspectionController::class, 'index'])->name('inspection.view');
    Route::post('/inspection-email', [PsvPcvInspectionController::class, 'sendEmail'])->name('inspection.email');

    Route::get('/invoice/index', [InvoiceController::class, 'index'])->name('invoices.index');
    Route::get('/invoice/create', [InvoiceController::class, 'create'])->name('invoices.create');
    Route::post('/invoice/store', [InvoiceController::class, 'store'])->name('invoices.store');
    Route::get('/invoice/show/{id}', [InvoiceController::class, 'show'])->name('invoices.show');
    Route::get('/invoice/edit/{id}', [InvoiceController::class, 'edit'])->name('invoices.edit');
    Route::patch('/invoice/update/{id}', [InvoiceController::class, 'update'])->name('invoices.update');
    Route::delete('/invoice/destroy/{id}', [InvoiceController::class, 'destroy'])->name('invoices.destroy');
    Route::post('/invoice/send-email/{id}', [InvoiceController::class, 'sendEmail'])->name('invoices.sendEmail');



});

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});