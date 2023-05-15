<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {
    return view('welcome');
});

// halaman Home
Route::get('home', [HomeController::class, 'index'])->name('home');



// halaman Profile
Route::get('profile', ProfileController::class)->name('profile');



// halaman employee list
Route::resource('employees', EmployeeController::class);


