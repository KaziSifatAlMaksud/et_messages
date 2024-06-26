<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\VideoController;


// Define a route for the form submission
// Route::post('/people_create', [PeopleController::class, 'addPerson'])->name('createpeople');
Route::middleware('auth')->group(function () {

    Route::get('/', [MainController::class, 'dashboard'])->name('dashboard');
    Route::post('/people_create', [PeopleController::class, 'addPerson'])->name('createpeople');

    // Profile routes, accessible only for authenticated users
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/people_profile/{id}', [PeopleController::class, 'show']);

    Route::post('/upload-video', [VideoController::class, 'upload'])->name('video.upload');
});

require __DIR__ . '/auth.php';
