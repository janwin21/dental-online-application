<?php

use App\Http\Controllers\Appointment;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\InformedConsentController;
use App\Http\Controllers\IntraoralController;
use App\Http\Controllers\MedicalHistoriesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ScreeningController;
use App\Http\Controllers\TestNavigationController;
use App\Http\Controllers\XrayController;
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

Route::get('/dashboard', function () { return view('pages.dashboard'); })->name('page.dashboard');

/*-- MOUST MASTERS ROUTES --*/
Route::resource('patient', PatientController::class);
Route::get('patient/show/all/{id}', [PatientController::class, 'showAll'])->name('patient.showAll');
Route::get('patient/create/with/{id}', [PatientController::class, 'createIndex'])->name('patient.createIndex');
Route::get('patient/show/all/with/{id}', [PatientController::class, 'showAllWith'])->name('patient.showAllWith');

Route::resource('medical-history', MedicalHistoriesController::class);
Route::resource('intraoral', IntraoralController::class);
Route::resource('xray', XrayController::class);
Route::resource('screening', ScreeningController::class);

Route::resource('consent', InformedConsentController::class);
Route::get('consent/edit/{patient_id}', 
    [InformedConsentController::class, 'editWithPatient'])->name('consent.editWithPatient');

Route::resource('appointment', AppointmentController::class);
Route::get('appointment/edit/with/{id}/{appointment_id}', [AppointmentController::class, 'editIndex'])->name('appointment.editIndex');
Route::get('appointment/index/with/{id}', [AppointmentController::class, 'indexWith'])->name('appointment.indexWith');
Route::get('appointmetn/edit/done/{id}', [AppointmentController::class, 'done'])->name('appointment.done');

require __DIR__.'/auth.php';
