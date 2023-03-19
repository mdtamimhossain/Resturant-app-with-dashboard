<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
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
    return view('page/home');
});
Route::middleware('auth')->group(function (){

});
Route::post('/reserve',[ReservationController::class,'ReservationProcess'])->name('reserve.process');
Route::get('/reservation',[ReservationController::class,'reservation'])->name('reservation');
Route::get('/home',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'processRegistration'])->name('register.process');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');



Route::get('/dashboard/food',[DashboardController::class,'dashboardFood'])->name('dashboard.food');
Route::get('/dashboard/reservation',[DashboardController::class,'dashboardReservation'])->name('dashboard.reservation');
Route::get('/dashboard/user',[DashboardController::class,'dashboardUser'])->name('dashboard.user');
//Route::get('/dashboard/userList',[DashboardController::class,'userList'])->name('dashboard.userList');
Route::post('/dashboard/delete/{id}', [DashboardController::class, 'deleteReservation'])->name('deleteReservation');

