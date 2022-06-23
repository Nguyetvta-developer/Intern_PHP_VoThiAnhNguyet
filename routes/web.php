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



// Route::get('/', function(){
//     return view();
// account
// Route::view('/login','account.account.login');
// Route::get('/account', [App\Http\Controllers\accountController::class, 'index'])->name('');
// Route::get('/add-account', [App\Http\Controllers\accountController::class, 'create'])->name('acount.add');
// Route::post('/save-account', [App\Http\Controllers\accountController::class, 'save'])->name('account.save');
// Route::get('/edit-account/{id}', [App\Http\Controllers\accountController::class, 'edit'])->name('');
// thiết bị
Route::get('/thiet-bi', [App\Http\Controllers\DeviceController::class, 'index'])->name('device');
Route::get('/them-thiet-bi', [App\Http\Controllers\DeviceController::class, 'create'])->name('device.add');
Route::post('/luu-thiet-bi', [App\Http\Controllers\DeviceController::class, 'save'])->name('device.save');
Route::get('/chi-tiet/{id}', [App\Http\Controllers\DeviceController::class, 'detail'])->name('device.detail');
Route::get('/chinh-sua-thiet-bi/{id}', [App\Http\Controllers\DeviceController::class, 'edit'])->name('device.edit');
Route::post('/cap-nhat/{id}', [App\Http\Controllers\DeviceController::class, 'update'])->name('device.update');
Route::get('/device-active', [App\Http\Controllers\DeviceController::class, 'device_active'])->name('device.active');
Route::get('/device-shut-dow', [App\Http\Controllers\DeviceController::class, 'device_shut_dow'])->name('device.shutdow');
Route::get('/device-connecting', [App\Http\Controllers\DeviceController::class, 'device_connecting'])->name('device.connecting');
Route::get('/device-disconnect', [App\Http\Controllers\DeviceController::class, 'device_disconnect'])->name('device.disconnect');
// dịch vụ
Route::get('/dich-vu', [App\Http\Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/them-dich-vu', [App\Http\Controllers\ServiceController::class, 'create'])->name('service.add');
Route::post('/luu-dich-vu', [App\Http\Controllers\ServiceController::class, 'save'])->name('service.save');
Route::get('/service-active', [App\Http\Controllers\ServiceController::class, 'service_active'])->name('service.active');
Route::get('/service-shut-dow', [App\Http\Controllers\ServiceController::class, 'service_shut_dow'])->name('service.shutdow');
Route::get('/service-detail/{id}', [App\Http\Controllers\ServiceController::class, 'service_detail'])->name('service.detail');
Route::get('/edit-service/{id}', [App\Http\Controllers\ServiceController::class, 'edit_service'])->name('service.edit');
Route::post('/update-service/{id}', [App\Http\Controllers\ServiceController::class, 'update_service'])->name('service.update');
