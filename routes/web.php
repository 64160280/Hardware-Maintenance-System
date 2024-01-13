<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', [App\Http\Controllers\Home_controller::class, 'index'])->name('home');
Route::post('/login', [App\Http\Controllers\Login_controller::class, 'login'])->name('Login');
Route::get('/logout', [App\Http\Controllers\Logout_controller::class, 'logout'])->name('Logout');


//ช่างเทคนิค (IT)
Route::get('/add_equipment_IT', [App\Http\Controllers\Equipment_controller::class, 'add'])->name('add');

Route::post('/insert_equipment', [App\Http\Controllers\Equipment_controller::class, 'insert_equipment'])->name('insert_equipment');

// Route::get('/IT_history', [App\Http\Controllers\History_controller::class, 'it_history'])->name(ง)


//พนักงาน 
Route::get('/request', [App\Http\Controllers\Request_services::class, 'request_equipment'])->name('request');

Route::get('/history', [App\Http\Controllers\History_controller::class, 'history'])->name('history');

Route::get('/repair', [App\Http\Controllers\Repair_services::class, 'repair'])->name('repair');

Route::post('/save_data', [App\Http\Controllers\Repair_services::class, 'save_repair'])->name('save_data');

//ผู้ดูแลระบบ{{  }}
Route::get('/approve', [App\Http\Controllers\Approve_admin_controller::class, 'approve'])->name('approve');
