<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;

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
    return view('fontend.home');
})->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'admin'])->name('admin.dashboard');

    Route::group(['as'=>'user.', 'prefix'=>'user'],function(){

        Route::get('index', [AdminUserController::class,'index'])->name('index');
        Route::get('create', [AdminUserController::class,'create'])->name('create');
        Route::post('store', [AdminUserController::class,'store'])->name('store');
        Route::get('status /{id}', [AdminUserController::class,'status'])->name('status');
        Route::get('edit /{id}', [AdminUserController::class,'edit'])->name('edit');
        Route::post('update /{id}', [AdminUserController::class,'update'])->name('update');
    });
    Route::group(['as'=>'product.', 'prefix'=>'product'],function(){
        Route::get('index',[ProductController::class,'index'])->name('index');
        Route::get('create',[ProductController::class,'create'])->name('create');
        Route::post('store',[ProductController::class,'store'])->name('store');
        Route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
        Route::post('update/{id}',[ProductController::class,'update'])->name('update');
        Route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
        Route::get('view/{id}',[ProductController::class,'view'])->name('view');
    });

});

Route::middleware(['auth', 'user'])->group(function () {
    Route::get('user/dashboard',[UserController::class, 'user'])->name('user.dashboard');
});
