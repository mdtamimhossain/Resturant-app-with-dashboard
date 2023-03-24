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
Route::get('/test',function (){
    return view('page/test');
} );

Route::get('/', [HomeController::class,'index'])->name('base');
Route::middleware('auth')->group(function (){

});

Route::get('/{type}',[HomeController::class,'index'])->name('home');


Route::post('/reserve',[ReservationController::class,'ReservationProcess'])->name('reserve.process');
Route::get('/reservation',[ReservationController::class,'reservation'])->name('reservation');

Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');
Route::get('/registration',[AuthController::class,'registration'])->name('registration');
Route::post('/registration', [AuthController::class, 'processRegistration'])->name('register.process');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/dashboard/reservation',[DashboardController::class,'dashboardReservation'])->name('dashboard.reservation');
Route::get('/dashboard/user',[DashboardController::class,'dashboardUser'])->name('dashboard.user');
//Route::get('/dashboard/userList',[DashboardController::class,'userList'])->name('dashboard.userList');
Route::post('/dashboard/delete/{id}', [DashboardController::class, 'deleteReservation'])->name('dashboard.deleteReservation');

Route::get('/dashboard/food', [DashboardController::class, 'foodList'])->name('dashboard.foodList');
Route::post('/upload', [DashboardController::class, 'foodUpload'])->name('dashboard.foodUpload');
