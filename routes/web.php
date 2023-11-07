<?php

use App\Http\Controllers\FacilitatorsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\TrafficInpersonController;
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
