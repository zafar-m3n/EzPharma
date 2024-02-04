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
    // Users CRUD Routes
    Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'showUsers'])->name('admin.users');
    Route::get('/admin/users/create', [App\Http\Controllers\AdminController::class, 'createUser'])->name('admin.users.create');
    Route::post('/admin/users/store', [App\Http\Controllers\AdminController::class, 'storeUser'])->name('admin.users.store');
    Route::get('/admin/users/edit/{id}', [App\Http\Controllers\AdminController::class, 'editUser'])->name('admin.users.edit');
    Route::put('/admin/users/update/{id}', [App\Http\Controllers\AdminController::class, 'updateUser'])->name('admin.users.update');
    Route::delete('/admin/users/delete/{id}', [App\Http\Controllers\AdminController::class, 'deleteUser'])->name('admin.users.delete');

    // Medication CRUD Routes
    // Medications routes
    Route::get('/admin/medications', [App\Http\Controllers\AdminController::class, 'showMedications'])->name('admin.medications');
    Route::get('/admin/medications/create', [App\Http\Controllers\AdminController::class, 'createMedication'])->name('admin.medications.create');
    Route::post('/admin/medications/store', [App\Http\Controllers\AdminController::class, 'storeMedication'])->name('admin.medications.store');
    Route::get('/admin/medications/{id}/edit', [App\Http\Controllers\AdminController::class, 'editMedication'])->name('admin.medications.edit');
    Route::put('/admin/medications/{id}', [App\Http\Controllers\AdminController::class, 'updateMedication'])->name('admin.medications.update');
    Route::delete('/admin/medications/{id}', [App\Http\Controllers\AdminController::class, 'deleteMedication'])->name('admin.medications.delete');

});

// Patient specific routes
Route::middleware(['auth', 'role:Patient'])->group(function () {
    Route::get('/patient/home', function () {
        return view('patient.home');
    })->name('patient.home');
    // Inside the 'Patient specific routes' middleware group
    Route::get('/patient/appointments', [App\Http\Controllers\AppointmentController::class, 'index'])->name('patient.appointments.index');
});
