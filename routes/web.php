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



Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Incidents Routes
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
Route::get('/incidents/create', [IncidentController::class, 'create'])->name('incidents.create');
Route::get('/incidents/assigned', [IncidentController::class, 'assigned'])->name('incidents.assigned');
Route::get('/incidents/open', [IncidentController::class, 'open'])->name('incidents.open');
Route::get('/incidents/resolved', [IncidentController::class, 'resolved'])->name('incidents.resolved');
Route::get('/incidents/unassigned', [IncidentController::class, 'unassigned'])->name('incidents.unassigned');

Route::get('/incidents/{incident}', [IncidentController::class, 'show'])->name('incidents.show');
Route::put('/incidents/{incident}', [IncidentController::class, 'update'])->name('incidents.update');
Route::delete('/incidents/{incident}', [IncidentController::class, 'destroy'])->name('incidents.destroy');
Route::get('/incidents/{incident}/edit', [IncidentController::class, 'edit'])->name('incidents.edit');



