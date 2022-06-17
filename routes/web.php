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



//home
// Route::get('/', function(){
//     return view();
// // });
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
