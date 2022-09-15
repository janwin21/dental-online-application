<?php

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

Route::get('/', [TestNavigationController::class, 'dashboard'])->name('page.dashboard');
Route::get('/logbook', [TestNavigationController::class, 'logbook'])->name('page.logbook');
Route::get('/patient', [TestNavigationController::class, 'patient'])->name('page.patient');
Route::get('/history', [TestNavigationController::class, 'history'])->name('page.history');
Route::get('/calendar', [TestNavigationController::class, 'calendar'])->name('page.calendar');

Route::get('/intraoral', [TestNavigationController::class, 'intraoral_examination'])->name('form.intraoral');
Route::get('/screening', [TestNavigationController::class, 'screening'])->name('form.screening');
Route::get('/appointment', [TestNavigationController::class, 'appointment'])->name('form.appointment');
Route::get('/main-information', [TestNavigationController::class, 'main_information'])->name('form.main-information');
Route::get('/xray', [TestNavigationController::class, 'xray'])->name('form.xray');
Route::get('/medical-history', [TestNavigationController::class, 'medical_history'])->name('form.medical-history');
Route::get('/informed-consent', [TestNavigationController::class, 'informed_consent'])->name('form.informed-consent');

Route::get('/dashboard', function () { return view('dashboard'); })->name('dashboard');

/*-- MOUST MASTERS ROUTES --*/
Route::resource('patient', PatientController::class);
Route::get('/patient/show/all/{id}', [PatientController::class, 'showAll'])->name('patient.showAll');
Route::get('/patient/create/with/{id}', [PatientController::class, 'createIndex'])->name('patient.createIndex');

Route::resource('medical-history', MedicalHistoriesController::class);
Route::resource('intraoral', IntraoralController::class);
Route::resource('xray', XrayController::class);
Route::resource('screening', ScreeningController::class);
Route::resource('consent', InformedConsentController::class);

require __DIR__.'/auth.php';
