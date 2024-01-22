<?php

use App\Http\Controllers\FacilitatorsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TrafficInpersonController;
use App\Http\Controllers\ShelterStaffController;
use App\Http\Controllers\InfoSomController;
use App\Http\Controllers\IncidentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/traffic-in-person', [TrafficInPersonController::class, 'index'])->name('traffic-in-person.index');
Route::get('/traffic-in-person/create', [TrafficInPersonController::class, 'create'])->name('traffic-in-person.create');
Route::post('/traffic-in-person', [TrafficInPersonController::class, 'store'])->name('traffic-in-person.store');
Route::get('/traffic-in-person/{id}', [TrafficInPersonController::class, 'show'])->name('traffic-in-person.show');
Route::get('/traffic-in-person/{id}/edit', [TrafficInPersonController::class, 'edit'])->name('traffic-in-person.edit');
Route::put('/traffic-in-person/{id}', [TrafficInPersonController::class, 'update'])->name('traffic-in-person.update');
Route::delete('/traffic-in-person/{id}', [TrafficInPersonController::class, 'destroy'])->name('traffic-in-person.destroy');

//facilitators
Route::get('/facilitators', [FacilitatorsController::class, 'index'])->name('facilitator.index');
Route::get('/facilitators/create', [FacilitatorsController::class, 'create'])->name('facilitator.create');
Route::post('/facilitators', [FacilitatorsController::class, 'store'])->name('facilitator.store');
Route::get('/facilitators/{id}', [FacilitatorsController::class, 'show'])->name('facilitator.show');
Route::get('/facilitators/{id}/edit', [FacilitatorsController::class, 'edit'])->name('facilitator.edit');
Route::put('/facilitators/{id}', [FacilitatorsController::class, 'update'])->name('facilitator.update');
Route::delete('/facilitators/{id}', [FacilitatorsController::class, 'destroy'])->name('facilitator.destroy');

//search
//Route::get('/victim-search', 'SearchController@search')->name('victim-search.victim');



// List all staff members
Route::get('shelterstaff', [ShelterStaffController::class, 'index'])->name('shelterstaff.index');

// Show the create staff member form
Route::get('shelterstaff/create', [ShelterStaffController::class, 'create'])->name('shelterstaff.create');
Route::post('shelterstaff', [ShelterStaffController::class, 'store'])->name('shelterstaff.store');
Route::get('shelterstaff/{shelterstaff}', [ShelterStaffController::class, 'show'])->name('shelterstaff.show');
Route::get('shelterstaff/{shelterstaff}/edit', [ShelterStaffController::class, 'edit'])->name('shelterstaff.edit');
Route::put('shelterstaff/{shelterstaff}', [ShelterStaffController::class, 'update'])->name('shelterstaff.update');
Route::delete('shelterstaff/{shelterstaff}', [ShelterStaffController::class, 'destroy'])->name('shelterstaff.destroy');


Route::get('/info-soms', [InfoSomController::class, 'index'])->name('info-soms.index');
Route::get('/info-soms/create', [InfoSomController::class, 'create'])->name('info-soms.create');
Route::post('/info-soms', [InfoSomController::class, 'store'])->name('info-soms.store');
Route::get('/info-soms/{id}', [InfoSomController::class, 'show'])->name('info-soms.show');
Route::get('/info-soms/{id}/edit', [InfoSomController::class, 'edit'])->name('info-soms.edit');
Route::put('/info-soms/{id}', [InfoSomController::class, 'update'])->name('info-soms.update');
Route::delete('/info-soms/{id}', [InfoSomController::class, 'destroy'])->name('info-soms.destroy');



// Incidents Routes
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index');
Route::get('/incidents/create', [IncidentController::class, 'create'])->name('incidents.create');
Route::get('/incidents/{incident}', [IncidentController::class, 'show'])->name('incidents.show');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
Route::get('/incidents/{incident}/edit', [IncidentController::class, 'edit'])->name('incidents.edit');
Route::put('/incidents/{incident}', [IncidentController::class, 'update'])->name('incidents.update');
Route::delete('/incidents/{incident}', [IncidentController::class, 'destroy'])->name('incidents.destroy');
