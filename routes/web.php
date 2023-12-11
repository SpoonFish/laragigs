<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//LISTINGS

//index all listings
Route::get('/', [ListingController::class,'index']);

//create a listing
Route::get('/listing/create', [ListingController::class,'create'])->middleware('auth');

//store a listing
Route::post('/listings', [ListingController::class,'store'])->middleware('auth');

//edit a listing
Route::get('/listings/{listing}/edit', [ListingController::class,'edit'])->middleware('auth');

//submit an edit
Route::put('/listings/{listing}', [ListingController::class,'update'])->middleware('auth');

//delete a listing
Route::delete('/listings/{listing}', [ListingController::class,'destroy'])->middleware('auth');

//show single listing
Route::get('/listing/{listing}', [ListingController::class,'show']);

//manage listings
Route::get('/listings/manager', [ListingController::class,'manage'])->middleware('auth');

//USERS

//show register account form
Route::get('/register', [UserController::class,'create'])->middleware('guest');

//create new user
Route::post('/users', [UserController::class,'store']);

//logout
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');

//show login form
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

//login
Route::post('/users/authenticate', [UserController::class,'authenticate']);
