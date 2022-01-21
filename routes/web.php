<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\FurnitureController;
use App\Http\Controllers\Backend\MakingController;
use App\Models\Repair;
use App\Models\Furniture;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarpenterController;
use App\Http\Controllers\Backend\RepairingController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ShowrepairingController;
use App\Http\Controllers\frontend\DesignshowController;
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
//         return view('website.pages.home',compact('furnitures'));
   })->name('user');
// Route::get('/',function (){
//     return view('website.pages.home');


// $furnitures=Furniture::all();
// dd($furnitures);

Route::get('/',[HomeController::class,'home']);
Route::post('/registration',[UserController::class,'registration'])->name('user.registration');
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->name('user.logout');

Route::get('/design',[DesignshowController::class,'showdesign'])->name('website.pages.design');
Route::get('/repairing',[ShowrepairingController::class,'showrepairinglist'])->name('website.pages.showrepairinglist');


 });
  



Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');


    //furniture route
    
    Route::get('/furnitures/create',[FurnitureController::class, 'furniturecreate'])->name('admin.furnitures.create');
    Route::post('furnitures/create',[FurnitureController::class,'store'])->name('admin.furnitures.store');
    Route::get('furnitures/create/furniture-list',[FurnitureController::class,'furniturelist'])->name('admin.furnitures.list');
    Route::get('furnitures/view/{furniture_id}',[FurnitureController::class,'furnituredetails'])->name('admin.furniture.details');
    Route::get('furnitures/delete/{furniture_id}',[FurnitureController::class,'furnituredelete'])->name('admin.furniture.delete');
    Route::get('furnitures/edit/{furniture_id}',[FurnitureController::class,'furnitureedit'])->name('admin.furniture.edit');
    Route::put('furnitures/update/{furniture_id}',[FurnitureController::class,'furnitureupdate'])->name('admin.furniture.update');

    //repairing route
    Route::get('/repairs/create',[RepairingController::class,'create'])->name('admin.repairs.create');
    Route::post('repairs/create',[RepairingController::class,'store'])->name('admin.repairs.store');
    Route::get('/repairs/create/rlist',[RepairingController::class,'rlist'])->name('admin.repairs.rlist');
    Route::get('repairs/view/{repairs_id}',[RepairingController::class,'repairingDetails'])->name('admin.repairs.details');
    Route::get('repairs/delete/{repairs_id}',[RepairingController::class,'repairingDelete'])->name('admin.repairs.delete');
    Route::get('repairs/edit/{repairs_id}',[RepairingController::class,'repairingedit'])->name('admin.repairs.edit');
    Route::put('repairs/update/{repairs_id}',[RepairingController::class,'repairingupdate'])->name('admin.repairs.update');



   //carpenter route
   Route::get('/carpenter/carpentercreate',[CarpenterController::class,'carpentercreate'])->name('admin.carpenter.carpentercreate');
   Route::post('carpenter/carpentercreate',[CarpenterController::class,'store'])->name('admin.carpenter.store');
   Route::get('carpenter/view/{carpenter_id}',[CarpenterController::class,'carpenterdetails'])->name('admin.carpenter.details');
   Route::get('carpenter/delete/{carpenter_id}',[CarpenterController::class,'carpenterdelete'])->name('admin.carpenter.delete');
   Route::get('/carpenter/carpentercreate/carpenterlist',[CarpenterController::class,'carpenterlist'])->name('admin.carpenter.carpenterlist');
   Route::get('carpenter/edit/{carpenter_id}',[CarpenterController::class,'carpenteredit'])->name('admin.carpenter.edit');
   Route::put('carpenter/update/{carpenter_id}',[CarpenterController::class,'carpenterupdate'])->name('admin.carpenter.update');
    
   
   //category route
    

    Route::get('furniture/category',[CategoryController::class,'category'])->name('admin.furniture.category');
    Route::post('furniture/category',[CategoryController::class,'store'])->name('admin.furniture.store');
    Route::get('furniture/category/categorylist',[CategoryController::class,'categorylist'])->name('admin.furniture.categorylist');
    Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::put('category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
    Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('admin.category.delete');
   
//making route
    Route::get('furniture/makinglist',[MakingController::class,'makingList'])->name('admin.making.list');
    Route::get('furniture/design',[MakingController::class,'furnituredesign'])->name('admin.design');
    Route::get('/furniture/design/designlist',[MakingController::class,'furnituredesignlist'])->name('admin.designlist');
    Route::post('furniture/design',[MakingController::class,'store'])->name('admin.store');





    
  });
