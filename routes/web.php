<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\AuthController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\NewsController;
use App\Http\Controllers\Dashboard\AdminController;
use App\Http\Controllers\Dashboard\IllnessController;

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

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::group(['middleware' => ['guest:admin']], function () {

    Route::get('dashboard/login', [AuthController::class, 'showLoginForm'])->name('dashboard.login');
    Route::post('dashboard/login', [AuthController::class, 'login'])->name('dashboard.login.submit');
});




Route::prefix('dashboard')->middleware(['auth:admin', 'isAdmin'])->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('dashboard.home');
    Route::post('dashboard/logout', [AuthController::class, 'logout'])->name('dashboard.logout');
    
    Route::get('/admins/promote/{admin}', [AdminController::class, 'promote'])->name('admins.promote');
    Route::get('/admins/demote/{superAdmin}', [AdminController::class, 'demote'])->name('admins.demote');
    Route::resource('admins',AdminController::class)->only(['index', 'store', 'create']);

    Route::resource('news',NewsController::class);
    Route::resource('illnesses',IllnessController::class);
});
