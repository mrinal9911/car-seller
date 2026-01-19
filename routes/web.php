<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EnquiryController;

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


/**
 * | From GPT
 */
Route::get('/', [CarController::class, 'homePage']);
Route::get('/home', [CarController::class, 'index']);
Route::get('/car/{id}', [CarController::class, 'show']);
Route::get('/create', [CarController::class, 'create']);

Route::get('/contact', [CarController::class, 'contactUs']);
Route::post('/post-contact', [CarController::class, 'postContactUs']);

Route::get('/vehicles', [CarController::class, 'vehicleList']);
Route::get('/vehicle-details/{id}', [CarController::class, 'vehicleDetails']);

Route::get('/about', [CarController::class, 'aboutUs']);
Route::get('/faq', [CarController::class, 'faqPage']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [CarController::class, 'dashboard'])->name('dashboard');
    Route::get('/add-listing', [CarController::class, 'addListing']);
    Route::post('/car/store', [CarController::class, 'store']);
    Route::get('/car/edit/{id}', [CarController::class, 'editListing']);
    Route::post('/car/update/{id}', [CarController::class, 'updateListing']);
    Route::post('/car/manage-status', [CarController::class, 'manageStatus']);
    Route::get('/list-message', [CarController::class, 'listMessage']);
});
/**
 * | CRUD of Enquiry
 */
Route::controller(EnquiryController::class)->prefix('enquiry')->group(function () {
    Route::get('/', 'enquiry')->name('enquiry.index');
    Route::get('/create', 'createEnquiry')->name('enquiry.create');         # For Frontend
    Route::post('/store', 'storeEnquiry')->name('enquiry.store');
    Route::get('/list', 'listEnquiry')->name('enquiry.list');
});


Route::middleware(['auth'])->group(function () {
    // Route::get('/dashboard', [CarController::class, 'dashboard'])->name('dashboard');
    // Route::post('/car/store', [CarController::class, 'store']);
});

require __DIR__ . '/auth.php';
