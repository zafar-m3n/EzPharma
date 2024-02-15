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
    Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
    Route::get('/admin/appointments', [App\Http\Controllers\Admin\AppointmentController::class, 'index'])->name('admin.appointments.index');
    Route::post('/admin/appointments/approve/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'approveAppointment'])
        ->name('admin.appointments.approve');
        Route::post('/admin/appointments/decline/{id}', [App\Http\Controllers\Admin\AppointmentController::class, 'declineAppointment'])
        ->name('admin.appointments.decline');
    //Articles routes
    Route::get('/admin/articles', [App\Http\Controllers\Admin\ArticleController::class, 'index'])->name('admin.articles.index');
    Route::get('/admin/articles/{article}', [App\Http\Controllers\Admin\ArticleController::class, 'show'])->name('admin.articles.show');
    Route::delete('/admin/articles/{article}', [App\Http\Controllers\Admin\ArticleController::class, 'destroy'])->name('admin.articles.destroy');

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
    Route::post('patient/appointments', [App\Http\Controllers\AppointmentController::class, 'store'])->name('patient.appointments.store');
    //create
    Route::get('/patient/appointments/create', [App\Http\Controllers\AppointmentController::class, 'create'])->name('patient.appointments.create');

    Route::get('/patient/payments', [App\Http\Controllers\PaymentController::class, 'index'])->name('patient.payments.index');
    Route::get('/patient/articles', [App\Http\Controllers\ArticleController::class, 'index'])->name('patient.articles');
    Route::get('/patient/articles/{article}', [App\Http\Controllers\ArticleController::class, 'show'])->name('patient.articles.show');
    Route::get('/patient/medications', [App\Http\Controllers\MedicationController::class, 'index'])->name('patient.medications');
    Route::get('/patient/notifications', [App\Http\Controllers\NotificationController::class, 'index'])->name('patient.notifications');
    Route::get('/patient/account', [App\Http\Controllers\AccountController::class, 'index'])->name('patient.account');
});

// Pharmacist specific routes
Route::middleware(['auth', 'role:Pharmacist'])->group(function () {
    Route::get('/pharmacist/home', function () {
        return view('pharmacist.home');
    })->name('pharmacist.home');
    Route::get('/pharmacist/patients', [App\Http\Controllers\PharmacistPatientsController::class, 'index'])->name('pharmacist.patients.index');
    Route::get('/pharmacist/inventory', [App\Http\Controllers\PharmacistInventoryController::class, 'index'])->name('pharmacist.inventory.index');
    Route::get('pharmacist/appointments', [App\Http\Controllers\PharmacistAppointmentsController::class, 'index'])->name('pharmacist.appointments.index');
    Route::get('/pharmacist/notifications', [App\Http\Controllers\PharmacistNotificationsController::class, 'index'])->name('pharmacist.notifications');
});
