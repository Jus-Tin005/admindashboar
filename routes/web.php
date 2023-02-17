<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', function(){
    return view('admin.index');
})->name('home');


/**--------------------------
 *  Admin All Routes *
 --------------------*/
 Route::controller(AdminController::class)->group(function(){
    Route::get('admin/login','destroy')->name('admin.logout');
 });

 /**--------------------------
 *  Role & User Routes *
 ---------------------------*/
Route::resource('companies', CompanyController::class);