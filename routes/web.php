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
use App\Http\Controllers\Backend\ReportController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\BookingController;
use App\Http\Controllers\Backend\OrderController;
use App\Http\Controllers\Frontend\ProfileController;




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



//single product view
Route::get('/show/product/{product_id}',[ProductController::class,'showProduct'])->name('product.show');
Route::get('/product/under/category/{category_id}',[ProductController::class,'guardsUnderCategory'])->name('product.under.category');





// booking route
Route::get('/show/guard/{id}',[BookingController::class,'showGuard'])->name('show.guard');
Route::post('/booking',[BookingController::class,'booking'])->name('guard.booking');




Route::get('/', function () {
    return view('backend.master');
});

// Route::group(['prefix'=>'admin','namespace'=>'Backend' function()])


//Route for dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


// profile
Route::get('/profile',[ProfileController::class,'showProfile'])->name('profile.show');


// route for login
 Route::get('/login',[UsersController::class,'login'])->name('login');
 Route::post('/do-login',[UsersController::class,'doLogin'])->name('admin.doLogin');



 Route::group(['middleware'=>'admin'],function(){
 Route::get('/logout/admin',[UsersController::class,'logout'])->name('admin.logout');




//Route for admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
// Route::post('/admin',[AdminController::class,'create'])->name('admin.create');
// Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');



//Route for client
Route::get('/client',[ClientController::class,'client'])->name('client');
Route::post('/client',[ClientController::class,'create'])->name('client.create');
Route::get('/client/delete/{id}',[ClientController::class,'delete'])->name('client.delete');
Route::get('/client/edit/{id}',[ClientController::class,'editClient'])->name('client.edit');
Route::put('/client/update/{id}',[ClientController::class,'updateClient'])->name('client.update');



// route for guard
Route::get('/guard',[GuardController::class,'guard'])->name('guard');
Route::post('/guard',[GuardController::class,'create'])->name('guard.create');
Route::get('/guard/delete/{id}',[GuardController::class,'delete'])->name('guard.delete');
Route::get('/guard/edit/{id}',[GuardController::class,'editGuard'])->name('guard.edit');
Route::put('/guard/update/{id}',[GuardController::class,'updateGuard'])->name('guard.update');





// route for catagories
Route::get('/category',[CategoryController::class,'category'])->name('category');
Route::post('/category',[CategoryController::class,'create'])->name('category.create');
Route::get('/category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');
Route::get('/category/edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'updateCategory'])->name('category.update');




// order
Route::get('/order',[OrderController::class,'order'])->name('order');
Route::post('/order',[CategoryController::class,'create'])->name('order.create');





// route for payment

Route::get('/payment',[PaymentController::class,'payment'])->name('payment');











// route for report
Route::get('/report',[ReportController::class,'report'])->name('report');


});