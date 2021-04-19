<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Backend\GuardController;
use App\Http\Controllers\Backend\PaymentController;
use App\Http\Controllers\Backend\UsersController;




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


// route for frontend

Route::get('/homepage',[HomePageController::class,'homepage'])->name('homepage');
Route::get('/login-registration',[UserController::class,'showLoginRegistration'])->name('login.registration.form');
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/logout',[UserController::class,'logout'])->name('logout');











Route::get('/', function () {
    return view('backend.master');
});

// Route::group(['prefix'=>'admin','namespace'=>'Backend' function()])


//Route for dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');





// route for login
 Route::get('/login',[UsersController::class,'login'])->name('login');
 Route::post('/do-login',[UsersController::class,'doLogin'])->name('admin.doLogin');



 Route::group(['middleware'=>'admin'],function(){
 Route::get('/logout',[UsersController::class,'logout'])->name('admin.logout');




//Route for admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'create'])->name('admin.create');
Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');



//Route for client
Route::get('/client',[ClientController::class,'client'])->name('client');
Route::post('/client',[ClientController::class,'create'])->name('client.create');
Route::get('/client/delete/{id}',[ClientController::class,'delete'])->name('client.delete');




// route for guard
Route::get('/guard',[GuardController::class,'guard'])->name('guard');
Route::post('/guard',[GuardController::class,'create'])->name('guard.create');
Route::get('/guard/delete/{id}',[GuardController::class,'delete'])->name('guard.delete');



// route for payment

Route::get('/payment',[PaymentController::class,'payment'])->name('payment');


});