<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('dashboard');
})->middleware(['auth', IsAdmin::class])->name('admin.dashboard');

require __DIR__.'/auth.php';

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

// pages
Route::middleware(['auth', IsUser::class])->group(function () {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

});


Route::get('/about-us',[HomeController::class, 'about'])->name('about');
Route::get('/contact-us',[HomeController::class, 'contact'])->name('contact');
Route::get('/blogs',[BlogController::class, 'listing'])->name('blogs.listing');
