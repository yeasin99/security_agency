<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\UserController;





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

Route::get('/', function () {
    return view('backend.master');
});


//Route for dashboard
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');


//Route for admin
Route::get('/admin',[AdminController::class,'admin'])->name('admin');
Route::post('/admin',[AdminController::class,'create'])->name('admin.create');
Route::get('/admin/delete/{id}',[AdminController::class,'delete'])->name('admin.delete');

//Route for user
Route::get('/user',[UserController::class,'user'])->name('user');
