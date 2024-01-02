<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\User\AdminController;
use App\Http\Controllers\Backend\User\UserController;
use App\Http\Controllers\Backend\User\ProfileController;
use App\Http\Controllers\Backend\Product\ProductController;
use App\Http\Controllers\Backend\Supplier\SupplierController;
use App\Http\Controllers\Forntend\FrontendController;
use App\Http\Controllers\Backend\Order\OrderController;
use App\Http\Controllers\Backend\Report\ReportController;
;

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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('app.backend.index');
})->name('dashboard');

Route::get('/admin/logout', [AdminController::class, 'Logout'])->name('admin.logout');

Route::get('calendar',[AdminController::class,'Calendar'])->name('app.calendar');

Route::prefix('user')->group(function (){
    Route::get('view',[UserController::class,'ViewUser'])->name('view.user');
    Route::get('add',[UserController::class,'AddUser'])->name('add.user');

});

Route::prefix('profile')->group(function (){
    Route::get('view',[ProfileController::class,'ViewProfile'])->name('view.profile');
    Route::get('edit',[ProfileController::class,'EditProfile'])->name('edit.profile');
    Route::get('security/view',[ProfileController::class,'ViewProfileSecurity'])->name('view.profile.security');
});

Route::prefix('products')->group(function (){
    //Product All Routes
    Route::get('view',[ProductController::class,'ViewProduct'])->name('view.product');
    Route::get('add', [ProductController::class, 'AddProduct'])->name('add.product');
    Route::post('store',[ProductController::class,'StoreProduct'])->name('store.product');
    Route::get('edit/{id}',[ProductController::class,'EditProduct'])->name('edit.product');
    Route::post('update/{id}',[ProductController::class,'UpdateProduct'])->name('update.product');
    Route::get('delete/{id}',[ProductController::class,'DeleteProduct'])->name('delete.product');

});

Route::prefix('suppliers')->group(function (){
    //supplier All Routes
    Route::get('view',[SupplierController::class,'ViewSupplier'])->name('view.supplier');
    Route::get('add', [SupplierController::class, 'AddSupplier'])->name('add.supplier');
    Route::post('store',[SupplierController::class,'StoreSupplier'])->name('store.supplier');
//    Route::get('edit/{id}',[SupplierController::class,'EditSupplier'])->name('edit.supplier');
//    Route::post('update/{id}',[SupplierController::class,'UpdateSupplier'])->name('update.supplier');
//    Route::get('delete/{id}',[SupplierController::class,'DeleteSupplier'])->name('delete.supplier');

});

Route::prefix('orders')->group(function (){
    //Product All Routes
    Route::get('view',[OrderController::class,'ViewOrder'])->name('view.order');
    Route::get('details/{product_id}', [OrderController::class, 'OrderDetails'])->name('order.details');
    Route::get('approve/{id}/{product_id}',[OrderController::class,'StoreApprove'])->name('store.approve');
    Route::get('reject/{id}',[OrderController::class,'StoreReject'])->name('store.reject');

});

Route::prefix('reports')->group(function (){
    //Product All Routes
    Route::get('stock/view/{id}',[ReportController::class,'ViewStockReport'])->name('view.stock.report');

});





//Frontend All Controller
Route::get('/',[FrontendController::class, 'Home'])->name('home');
Route::prefix('checkouts')->group(function (){
    Route::get('add/customer/{product_id}/{price}',[FrontendController::class,'AddCustomer'])->name('add.customer');
    Route::post('order/store',[FrontendController::class,'StoreOrder'])->name('store.order');
});


