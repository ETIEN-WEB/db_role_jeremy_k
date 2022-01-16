<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [PageController::class, 'index'])->name('home');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/user_register', [PageController::class, 'user_register'])->name('user_register');
Route::get('/login', [PageController::class, 'user_login'])->name('login');


Route::get('/view_permission', [PermissionController::class, 'view_permission'])->name('view_permission');

Route::group(['middleware' => ['permission:admin.setting']], function () {
    Route::get('/admin_setting', [PageController::class, 'admin_setting'])->name('admin_setting');
});

Route::group(['middleware' => ['permission:user.setting']], function () {
    Route::get('/user_setting', [PageController::class, 'user_setting'])->name('user_setting');
});

// Route::fallback(function(){
    
// });


//Route::get('/client', [PageController::class, 'client'])->name('client');

