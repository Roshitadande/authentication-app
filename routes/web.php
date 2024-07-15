<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register'])->name('user.register');

Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');


Route::group(['middleware'=>'webgaurd'], function () {
    Route::get('/dashboard',[UserController::class,'showDashboard'])->name('dashboard');
});

    
Route::get('/profile',[DashboardController::class,'editProfile'])->name('profile');
Route::put('/profile/update/{id}', [DashboardController::class, 'updateProfile'])->name('profile.update');

Route::middleware(['dashgaurd'])->group(function(){
    Route::get('/home',[DashboardController::class,'showHome'])->name('home');
    Route::get('/about',[DashboardController::class,'showAbout'])->name('about');
    Route::get('/contact',[DashboardController::class,'showContact'])->name('contact');
});


