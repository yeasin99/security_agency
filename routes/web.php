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
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\PaymentControllerF;
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

Route::get('/login-registration', [UserController::class, 'showLoginRegistration'])->name('login.registration.form');
Route::post('/registration', [UserController::class, 'registration'])->name('registration');
Route::post('/login', [UserController::class, 'login'])->name('user.login');
Route::get('/reg', [UserController::class, 'reg'])->name('reg');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


// route for admin login
Route::get('/login', [UsersController::class, 'login'])->name('login');
Route::post('/do-login', [UsersController::class, 'doLogin'])->name('admin.doLogin');

Route::group(['middleware' => 'customer-auth'], function () {
    Route::get('/homepage', [HomePageController::class, 'homepage'])->name('homepage');


    // Route::post('/payment', [PaymentController::class, 'create'])->name('payment.create');
   

    //single product view
    Route::get('/show/product/{product_id}', [ProductController::class, 'showProduct'])->name('product.show');
    Route::get('/product/under/category/{category_id}', [ProductController::class, 'guardsUnderCategory'])->name('product.under.category');


//addd to cart
Route::get('carts',[CartController::class,'cart'])->name('carts');


    // booking route
    // Route::group(['middleware' => 'auth'], function () {
    Route::get('/show/guard/{id}', [BookingController::class, 'showGuard'])->name('show.guard');
    Route::get('/show/guard/show/{id}', [BookingController::class, 'showGuardBooking'])->name('showGuard.book');
    Route::post('/booking', [BookingController::class, 'booking'])->name('guard.booking');
    Route::get('/show/guard/payment/{id}', [BookingController::class, 'guardPayment'])->name('payment.guard');
    Route::get('/user/payment', [PaymentControllerF::class, 'userPayment'])->name('userPayment');
    Route::post('/user/payment/create', [PaymentControllerF::class, 'payPayment'])->name('payPayment');
   
    // });




    // Route::group(['prefix'=>'admin','namespace'=>'Backend' function()])


    


    // profile
    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('profile.show');

    Route::get('/booking/guard', [ProfileController::class, 'showBookings'])->name('bookings.show');


});


Route::group(['middleware' => 'admin'], function () {

    
    Route::get('/', function () {
        return view('backend.master');
    });

    //Route for dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout/admin', [UsersController::class, 'logout'])->name('admin.logout');




    //Route for admin
    Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
    // Route::post('/admin',[AdminController::class,'create'])->name('admin.create');
    // Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');



    //Route for client
    Route::get('/client', [ClientController::class, 'client'])->name('client');
    Route::post('/client', [ClientController::class, 'create'])->name('client.create');
    Route::get('/client/delete/{id}', [ClientController::class, 'delete'])->name('client.delete');
    Route::get('/client/edit/{id}', [ClientController::class, 'editClient'])->name('client.edit');
    Route::put('/client/update/{id}', [ClientController::class, 'updateClient'])->name('client.update');



    // route for guard
    Route::get('/guard', [GuardController::class, 'guard'])->name('guard');
    Route::post('/guard', [GuardController::class, 'create'])->name('guard.create');
    Route::get('/guard/delete/{id}', [GuardController::class, 'delete'])->name('guard.delete');
    Route::get('/guard/edit/{id}', [GuardController::class, 'editGuard'])->name('guard.edit');
    Route::put('/guard/update/{id}', [GuardController::class, 'updateGuard'])->name('guard.update');
    Route::post('/guard/search', [GuardController::class, 'search'])->name('guard.search');





    // route for catagories
    Route::get('/category', [CategoryController::class, 'category'])->name('category');
    Route::post('/category', [CategoryController::class, 'create'])->name('category.create');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category.delete');
    Route::get('/category/edit/{id}', [CategoryController::class, 'editCategory'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');




    // order
    Route::get('/order', [OrderController::class, 'order'])->name('order');
    Route::post('/order', [CategoryController::class, 'create'])->name('order.create');





    // route for payment
    Route::get('/payment', [PaymentController::class, 'payment'])->name('payment');

     // route for payment
     Route::get('/payment/status/{id}', [PaymentController::class, 'statusUpdate'])->name('statusUpdate');
      // route for payment
      Route::get('/payment/status/cancel/{id}', [PaymentController::class, 'statusCancel'])->name('statusCancel');












    // route for report
    Route::get('/report', [ReportController::class, 'report'])->name('report');
});
