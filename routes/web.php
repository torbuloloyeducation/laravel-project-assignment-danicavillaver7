<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ApplicationController;
Route::post('/jobs/{job}/submit', [ApplicationController::class, 'store'])->name('jobs.submit');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::view('/', 'pages.home');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/jobs', [JobListingController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{job}', [JobListingController::class, 'show'])->name('jobs.show');
Route::get('/applications', [ApplicationController::class, 'index'])->name('applications.index');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/{id}/apply', [JobController::class, 'showApplyForm'])->name('jobs.apply');
Route::post('/jobs/{id}/apply', [JobController::class, 'submitApplication'])->name('jobs.submit');
Route::get('/jobs/{id}/thankyou', [JobController::class, 'showThankYou'])->name('jobs.thankyou');
