<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('backend.index');
// });
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return redirect()->route('login');
});

//Route::get('/get-dashboard',[App\Http\Controllers\Backend\DefaultController::class, 'getdashboard'])->name('default.get-dashboard');
// Route::get('/get-','Backend\DefaultController@get')->name('default.get-');
// Route::get('/get-','Backend\DefaultController@get')->name('default.get-');

Auth::routes();

Route::get('/get-dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('get-dashboard');
Route::get('/customer',[App\Http\Controllers\CustomerController::class, 'newCustomer'])->name('customer');
Route::post('/delete-customer',[App\Http\Controllers\CustomerController::class, 'deleteCustomer'])->name('delete-customer');
Route::post('/store-customer',[App\Http\Controllers\CustomerController::class, 'storeCustomer'])->name('store-customer');
Route::post('/edit-customer',[App\Http\Controllers\CustomerController::class, 'editCustomer'])->name('edit-customer');
Route::post('/update-customer',[App\Http\Controllers\CustomerController::class, 'updateCustomer'])->name('update-customer');
