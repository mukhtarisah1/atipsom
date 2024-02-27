<?php

use App\Http\Controllers\FacilitatorsController;
use App\Http\Controllers\IncidentController;
use App\Http\Controllers\InfoSomController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ShelterStaffController;
use App\Http\Controllers\TrafficInpersonController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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


Route::middleware( ['auth'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('index.users')->middleware('isAdmin');
Route::delete('/delete-user/{user}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('delete.user')->middleware('isAdmin');

// Incidents Routes
Route::get('/incidents', [IncidentController::class, 'index'])->name('incidents.index');
Route::post('/incidents', [IncidentController::class, 'store'])->name('incidents.store');
Route::get('/incidents/create', [IncidentController::class, 'create'])->name('incidents.create');
Route::get('/incidents/assigned', [IncidentController::class, 'assigned'])->name('incidents.assigned');
Route::get('/incidents/open', [IncidentController::class, 'open'])->name('incidents.open');
Route::get('/incidents/resolved', [IncidentController::class, 'resolved'])->name('incidents.resolved');
Route::get('/incidents/closed', [IncidentController::class, 'resolved'])->name('incidents.closed');
Route::get('/incidents/unassigned', [IncidentController::class, 'unassigned'])->name('incidents.unassigned');
Route::get('/incidents/reports', [ReportController::class, 'index'])->name('incidents.reports')->middleware('isAdmin');

Route::get('/incidents/{incident}', [IncidentController::class, 'show'])->name('incidents.show');
Route::put('/incidents/{incident}', [IncidentController::class, 'update'])->name('incidents.update');
Route::delete('/incidents/{incident}', [IncidentController::class, 'destroy'])->name('incidents.destroy');
Route::get('/incidents/{incident}/edit', [IncidentController::class, 'edit'])->name('incidents.edit');
Route::post('/incidents/reports/generate', [ReportController::class, 'generate'])->name('incidents.reports.generate')->middleware('isAdmin');
});







