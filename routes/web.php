<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\ComponentController;

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

// This is for test purposes only
// Comment out on production
//Route::get('users', [UserController::class, 'index']);

// Needed by auth
Auth::routes();

// Normal Routes
Route::get('/', function () {
    return view('home');
});

// Test auth along with __construct in HomeController
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('listings', [ListingController::class, 'getListings']);

Route::get('/listing/{listing}', 'App\Http\Controllers\ListingController@indexListing');

Route::get('/create-listing', [ComponentController::class, 'getComponents'])->middleware('auth');

Route::post('/add-listing', [ListingController::class, 'addListing'])->middleware('auth');

Route::get('my-listings', [ListingController::class, 'getMyListings'])->middleware('auth');

Route::get('/delete/{listing}', [ListingController::class, 'deleteListing'])->middleware('auth');

Route::get('/edit-listing/{listing}', 'App\Http\Controllers\ListingController@indexEditListing')->middleware('auth');

Route::post('/edit-listing', [ListingController::class, 'editListing'])->middleware('auth');

Route::get('/my-profile', [UserController::class, 'getMyProfile'])->middleware('auth');

Route::get('/purchased/{listing}', [ListingController::class, 'purchase'])->middleware('auth');

// Route::get('/admin', function () {
//     return view('admin');
// })->middleware('auth');

Route::post('/add-component', [ComponentController::class, 'addComponent'])->middleware('auth');