<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 
use App\Http\Controllers\MasterTableController;
use App\Http\Controllers\UnitsTableController; 
use App\Http\Controllers\SupplierTableController; 
use App\Http\Controllers\CustommerController;
use App\Http\Controllers\ItemTypeController;
use App\Http\Controllers\StockLocationController;  
use App\Http\Controllers\PurchaseController; 
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
    return view('Home');
});


//product
Route::get('/product',[ProductController::class,'index']);
Route::get('/product_index',[ProductController::class,'product_index']);
Route::post('/product_store',[ProductController::class,'store']);


// Category
Route::post('/category_store',[MasterTableController::class,'category_store']);
Route::get('/category',[MasterTableController::class,'Category']);
Route::post('/category_edit',[MasterTableController::class,'CategoryEdit']);
Route::post('/category_update',[MasterTableController::class,'CategoryUpdate']);


Route::post('/unit_store',[UnitsTableController::class,'Unit_Store']);
Route::get('/unit',[UnitsTableController::class,'Unit']);
Route::post('/unit_edit',[UnitsTableController::class,'UnitEdit']);


//supplier  
Route::get('/supplier',[SupplierTableController::class,'Supplier_index']);
Route::post('/supplier_store',[SupplierTableController::class,'supplier_store']);
Route::post('/supplier_edit',[SupplierTableController::class,'supplier_edit']);
Route::post('/supplier_update',[SupplierTableController::class,'supplier_update']);

//customer
Route::post('/customer_store',[CustommerController::class,'Customer_store']);
Route::get('/customer',[CustommerController::class,'customer_index']);
Route::post('/customer_edit',[CustommerController::class,'Customer_Edit']);
Route::post('/customer_update',[CustommerController::class,'Customer_Update']);

//item type
Route::get('/item_type',[ItemTypeController::class,'index']);
Route::post('/itemtype_store',[ItemTypeController::class,'ItemStore']);
Route::post('/itemtype_edit',[ItemTypeController::class,'itemTypeEdit']);
Route::post('/item_type_update',[ItemTypeController::class,'itemTypeUpdate']);

//stock_location

Route::get('/stock_location',[StockLocationController::class,'index']);
Route::post('/location_store',[StockLocationController::class,'LocationStore']);
// Route::post('/category_edit',[MasterTableController::class,'CategoryEdit']);
// Route::post('/category_update',[MasterTableController::class,'CategoryUpdate']);

//purchase
Route::get('/purchase',[PurchaseController::class,'index']);
Route::post('/pproduct',[PurchaseController::class,'Getpurchaseinformation']);

//purchase pdf
Route::post('/ppdf',[PurchaseController::class,'ppdf']);