<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FurnitureController;
use App\Models\Repair;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarpenterController;
use App\Http\Controllers\Backend\RepairingController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\UserController;

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
Route::group(['prefix'=>'user-portal'],function(){
    Route::get('/', function () {
        return view('website.pages.home');
    })->name('user');
// Route::get('/',function (){
//     return view('website.pages.home');



Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');





});
  
Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');
    //furniture route
    Route::get('/furnitures/list',[FurnitureController::class,'furniturelist'])->name('admin.furnitures');
    Route::get('/furnitures/create',[FurnitureController::class, 'furniturecreate'])->name('admin.furnitures.create');
    Route::post('furnitures/create',[FurnitureController::class,'store'])->name('admin.furnitures.store');
    Route::get('furnitures/create/furniture-list',[FurnitureController::class,'view'])->name('admin.furnitures.list');
  

    //repairing route
    Route::get('/repairs/create',[RepairingController::class,'create'])->name('admin.repairs.create');
    Route::post('repairs/create',[RepairingController::class,'store'])->name('admin.repairs.store');
    Route::get('/repairs/create/rlist',[RepairingController::class,'rlist'])->name('admin.repairs.rlist');
    Route::get('repairs/view/{repairs_id}',[RepairingController::class,'repairingDetails'])->name('admin.repairs.details');
    Route::get('repairs/delete/{repairs_id}',[RepairingController::class,'repairingDelete'])->name('admin.repairs.delete');

   //carpenter route
   Route::get('/carpenter/carpentercreate',[CarpenterController::class,'carpentercreate'])->name('admin.carpenter.carpentercreate');
   Route::post('carpenter/carpentercreate',[CarpenterController::class,'store'])->name('admin.carpenter.store');
   Route::get('carpenter/view/{carpenter_id}',[CarpenterController::class,'carpenterdetails'])->name('admin.carpenter.details');
   Route::get('carpenter/delete/{carpenter_id}',[CarpenterController::class,'carpenterdelete'])->name('admin.carpenter.delete');
   Route::get('/carpenter/carpentercreate/carpenterlist',[CarpenterController::class,'carpenterlist'])->name('admin.carpenter.carpenterlist');
    //category route
    

    Route::get('furniture/category',[CategoryController::class,'category'])->name('admin.furniture.category');
    Route::get('/furniture/categorylist',[CategoryController::class,'categorylist'])->name('admin.furniture');
    Route::post('furniture/category',[CategoryController::class,'store'])->name('admin.furniture.store');
    Route::get('furniture/category/categorylist',[CategoryController::class,'view'])->name('admin.furniture.categorylist');
  });