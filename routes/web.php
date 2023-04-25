<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AdminController;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::get('dashboard/login', [AuthController::class, 'showLoginForm'])->name('dashboard.login');
Route::post('dashboard/login', [AuthController::class, 'login'])->name('dashboard.login.submit');
Route::post('dashboard/logout', [AuthController::class, 'logout'])->name('dashboard.logout');

Route::prefix('dashboard')->middleware(['auth:admin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');
    Route::get('/admins', [AdminController::class, 'index']);
    Route::get('/admins/create', [AdminController::class, 'create']);
    Route::post('/admins/store', [AdminController::class, 'store']);
    Route::get('/admins/promote/{id}', [AdminController::class, 'promote']);
    Route::get('/admins/demote/{id}', [AdminController::class, 'demote']);
});

