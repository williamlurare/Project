<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\SongController;

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

//All Lisitings
Route::get('/', [ListingController::class, 'index']);
Route::get('/home', [ListingController::class, 'index'])->middleware(['auth', 'is_verify_email']);

Route::get('/songs{song}', [SongController::class, 'index']);

//show create form
Route::get('/listings/create', 
[ListingController::class, 'create']
)->middleware('auth');

//show create form
Route::get('/songs/create/', 
[SongController::class, 'create']
)->middleware('auth');

//Store Listings data
Route::post(
    '/listings/',
    [ListingController::class, 'store']
    )->middleware('auth');

//Store Listings data
Route::post(
    '/songs/',
    [SongController::class, 'store']
    )->middleware('auth');
//Edit data

Route::get(
    '/listings/{listing}/edit',
    [ListingController::class, 'edit']
    )->middleware('auth');

    //Edit data

Route::get(
    '/songs/{song}/edit',
    [SongController::class, 'edit']
    )->middleware('auth');

//Update listing
Route::put(
    '/listings/{listing}/',
    [ListingController::class, 'update']
    )->middleware('auth');

//Update listing
Route::put(
    '/songs/{song}/',
    [SongController::class, 'update']
    )->middleware('auth');
//Delete listing
Route::delete(
    '/listings/{listing}/',
    [ListingController::class, 'delete']
    )->middleware('auth');

    //Delete listing
Route::delete(
    '/songs/{song}/',
    [SongController::class, 'delete']
    )->middleware('auth');

//Manage Listing
Route::get('/listings/manage',
[ListingController::class, 'manage']);

//Manage Songs
Route::get('/songs/manage',
[SongController::class, 'manage']);

//Single Listings
Route::get(
    '/listings/{listing}',
    [ListingController::class, 'show']
);

//Single Song
Route::get(
    '/songs/{song}',
    [SongController::class, 'show']
);

//show register/create form 
Route::get('/register', 
[UserController::class, 'register']
)->middleware('guest');

//Create User
Route::post('/user', [
    UserController::class, 'store'
]
);

//Logout

Route::post('/logout', [
    UserController::class, 'logout'
]
)->middleware('auth');

//show login form
Route::get('/login', [
    UserController::class, 'login'
])->name('login')
->middleware('guest');;

//Login User
Route::post('/user/auth',
[UserController::class, 'auth']);

//Verify User
Route::get('account/verify/{token}', 
[UserController::class, 'verifyAccount']
)->name('user.verify');
