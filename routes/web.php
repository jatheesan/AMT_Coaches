<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\EnquiryMailController;
use App\Http\Controllers\PsvPcvInspectionController;
use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\InvoiceController;
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

// Default redirect (optional)
Route::get('/', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}");
});

Route::get('/about', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/about");
});

Route::get('/contact', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/contact");
});

Route::get('/fleet', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/fleet");
});

Route::get('/services', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/services");
});

Route::get('/terms-conditions', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/terms-conditions");
});

Route::get('/enquiry', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/enquiry");
});

Route::get('/airport-transfers-london', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/airport-transfers-london");
});

Route::get('/corporate-coach-hire-london', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/corporate-coach-hire-london");
});

Route::get('/school-trips-coach-hire-london', function () {
    $locale = session('locale', 'en');
    return redirect("/{$locale}/school-trips-coach-hire-london");
});

Route::group([
    'prefix' => '{locale}',
    'middleware' => 'setLocale',
    'where' => ['locale' => 'en|fr|ta|ko']
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
});

Route::get('/layouts', function () {
    return view('layouts.template');
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