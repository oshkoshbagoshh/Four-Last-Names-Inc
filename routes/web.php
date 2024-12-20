<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\MeetingController;
use App\Http\Controllers\AdminController; // Change this from UserController
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');



//

// TODO: add meeting controller
Route::get('/meeting', [MeetingController::class, 'index'])->name('meeting.index');


// TODO: Add admin and auth
// Admin routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::resource('posts', AdminPostController::class)->except(['show']);
});

require __DIR__ . '/auth.php';
