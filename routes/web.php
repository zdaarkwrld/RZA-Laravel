<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/* Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home'); */

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

/* resources category routes */
Route::get('/resources', function () {
    return view('resources');
})->name('resources');



Route::get('/faq-page', function () {
    return view('faq-page');
})->name('faq-page');



Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/resources/pinguins', function () {
    return view('resource-pages/pinguins');
})->name('pinguins');

Route::get('/resources/giraffes', function () {
    return view('resource-pages/giraffes');
})->name('giraffes');

Route::get('/resources/lions', function () {
    return view('resource-pages/lions');
})->name('lions');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/booking/add/', [BookingController::class, 'add'])->name('booking.add');

    Route::get('/contact-us', function () {
        return view('contact-us');
    })->name('contact-us');

    Route::get('/booking', function () {
        return view('booking');
    })->name('booking');
});

require __DIR__.'/auth.php';
