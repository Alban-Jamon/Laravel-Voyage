<?php

use App\Http\Controllers\VoyageController;
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

Route::get('/', "App\Http\Controllers\StaticController@home")->name('home');

Route::get('trips', "App\Http\Controllers\StaticController@trips")->name('trips');

Route::get('trip/{id}', "App\Http\Controllers\StaticController@trip")->name('trip');

Route::get('aboutus', function(){
    return view('aboutus');
})->name('aboutus');

Route::get('contact', function(){
    return view('contact');
})->name('contact');



// admin Route 

Route::prefix('admin')->group(function(){
    Route::get('home', [VoyageController::class, 'index']);
    Route::get('lesVoyages', [VoyageController::class, 'someTrips']);
    Route::get('trips', [VoyageController::class, 'gestion'])->name('gestion');
    Route::get('addTrip',[VoyageController::class, 'create'] )->name('addTrip');
    Route::post('addTrip',[VoyageController::class, 'store'] )->name('store');
    Route::get('show/{id}',[VoyageController::class, 'show'] )->name('show');

    Route::get('destroyTrip/{id}',[VoyageController::class, 'destroy'])->name('destroy');
});