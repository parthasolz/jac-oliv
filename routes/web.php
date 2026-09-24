<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerApplicationController;
use App\Http\Controllers\ContactController;

Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/applications', [AdminController::class, 'applications'])->name('admin.applications');
    Route::get('/admin/applications/{id}', [AdminController::class, 'application'])->name('admin.application');
    Route::get('/admin/applications/{id}/resume', [AdminController::class, 'downloadResume'])->name('admin.application.resume');
    Route::get('/admin/contact-messages', [AdminController::class, 'contactMessages'])->name('admin.contact-messages');
    Route::get('/admin/contact-messages/{id}', [AdminController::class, 'contactMessage'])->name('admin.contact-message');
});

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Home
Route::view('/', 'frontend.home')->name('home');
Route::view('/about', 'frontend.about')->name('about');
Route::view('/vision-legacy', 'frontend.vision-legacy')->name('vision-legacy');
Route::view('/history', 'frontend.history')->name('history');
Route::view('/leadership', 'frontend.leadership')->name('leadership');
Route::view('/brands', 'frontend.brands')->name('brands');
Route::view('/catalogue', 'frontend.catalogue')->name('catalogue');
Route::view('/philosophy', 'frontend.philosophy')->name('philosophy');
Route::view('/sustainability-and-impact', 'frontend.sustainability-and-impact')->name('sustainability-and-impact');
Route::view('/careers', 'frontend.careers')->name('careers');
Route::post('/careers/apply', [CareerApplicationController::class,'store'])->name('careers.apply');
Route::view('/contact', 'frontend.contact')->name('contact');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
