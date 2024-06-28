<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route::middleware(['auth'])->group(function () {
//     Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// });

Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'index'])->name('login');
Route::post('/check-login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('/check-login');
Route::get('/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('/dashboard');
// ->middleware('is_admin');
Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');

Route::post('submit-form', [App\Http\Controllers\FormController::class, 'submitForm'])->name('submit-form');


// Form    CRUD Route

Route::resource('form', FormController::class);
