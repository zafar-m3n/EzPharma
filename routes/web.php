<?php

use Illuminate\Support\Facades\Route;

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

// Unauthenticated routes
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// General authenticated routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin specific routes
Route::middleware(['auth', 'role:Admin'])->group(function () {
    Route::get('/admin/home', function () {
        return view('admin.home');
    })->name('admin.home');
    // Add more admin routes here
});

// Patient specific routes
Route::middleware(['auth', 'role:Patient'])->group(function () {
    Route::get('/patient/home', function () {
        return view('patient.home');
    })->name('patient.home');
    // Add more patient routes here
});
