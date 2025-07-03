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
Route::get('/vehicle-details', [CarController::class, 'vehicleDetails']);

Route::get('/account-listing', [CarController::class, 'accountListing']);
Route::get('/add-listing', [CarController::class, 'addListing']);

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
    Route::get('/dashboard', [CarController::class, 'dashboard'])->name('dashboard');
    Route::post('/car/store', [CarController::class, 'store']);
});

require __DIR__ . '/auth.php';
