<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MemberPostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ExportController;
use Illuminate\Support\Facades\Route;

// Home page
Route::get('/', function () {
    return view('welcome');
});

// Public pages
Route::get('/about', function () { return view('about'); })->name('about');
Route::get('/course', function () { return view('course'); })->name('course');
Route::get('/membership', function () { return view('membership'); })->name('membership');
Route::get('/contact', function () { return view('contact'); })->name('contact');
Route::get('/green-fees', function () { return view('green-fees'); })->name('green-fees');
Route::get('/history', function () { return view('history'); })->name('history');
Route::get('/socials', function () { return view('socials'); })->name('socials');

// Authenticated users
Route::middleware(['auth'])->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile/{user}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit/me', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/edit/me', [ProfileController::class, 'update'])->name('profile.update');

    // Member Posts
    Route::post('/member-posts', [MemberPostController::class, 'store'])->name('member-posts.store');
    Route::delete('/member-posts/{memberPost}', [MemberPostController::class, 'destroy'])->name('member-posts.destroy');

    // Likes
    Route::post('/member-posts/{memberPost}/like', [MemberPostController::class, 'like'])->name('member-posts.like');

    // Comments
    Route::post('/member-posts/{memberPost}/comment', [MemberPostController::class, 'comment'])->name('member-posts.comment');
    Route::delete('/member-post-comments/{memberPostComment}', [MemberPostController::class, 'destroyComment'])->name('member-post-comments.destroy');
});

// Admin routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);

    // CSV Exports
    Route::get('/exports', [ExportController::class, 'index'])->name('exports');
    Route::get('/export/users', [ExportController::class, 'exportUsers'])->name('export.users');
    Route::get('/export/golf-scores', [ExportController::class, 'exportGolfScores'])->name('export.golf-scores');
    Route::get('/export/green-fees', [ExportController::class, 'exportGreenFees'])->name('export.green-fees');
});

// Auth routes (login, register, logout etc)
require __DIR__.'/auth.php';