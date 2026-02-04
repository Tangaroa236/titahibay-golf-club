<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/membership', function () {
    return view('membership');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/socials', function () {
    return view('socials');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::resource('admin/posts', \App\Http\Controllers\Admin\PostController::class)->names('admin.posts');
    Route::resource('admin/users', \App\Http\Controllers\Admin\UserController::class)->names('admin.users');
});

require __DIR__.'/auth.php';