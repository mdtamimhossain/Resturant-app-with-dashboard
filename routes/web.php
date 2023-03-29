<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FoodController;
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


Route::middleware('auth')->group(function (){

});
Route::get('/', [FoodController::class,'index'])->name('base');
Route::get('/food/{type}',[FoodController::class,'index'])->name('home');


Route::post('/reserve',[ReservationController::class,'ReservationProcess'])->name('reserve.process');
Route::get('/reservation',[ReservationController::class,'reservation'])->name('reservation');

Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/order/{id}',[FoodController::class,'order'])->name('order');
Route::post('/order',[FoodController::class,'orderProcess'])->name('order.process');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'processRegistration'])->name('register.process');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard/reservation',[ReservationController::class,'dashboardReservation'])->name('dashboard.reservation');
Route::get('/dashboard/user',[DashboardController::class,'dashboardUser'])->name('dashboard.user');
Route::get('/dashboard/order',[DashboardController::class,'dashboardOrder'])->name('dashboard.order');
//Route::get('/dashboard/userList',[DashboardController::class,'userList'])->name('dashboard.userList');
Route::post('/dashboard/reservation/delete/{id}', [ReservationController::class, 'deleteReservation'])->name('dashboard.deleteReservation');
Route::post('/dashboard/order/delete/{id}', [FoodController::class, 'deleteOrder'])->name('dashboard.deleteOrder');

Route::get('/dashboard/food', [FoodController::class, 'foodList'])->name('dashboard.foodList');
Route::post('/upload', [FoodController::class, 'foodUpload'])->name('dashboard.foodUpload');
