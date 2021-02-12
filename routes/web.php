<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\Categories\CategoryController;

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


Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/', function () {
        return view('pages.dashboard');
    });

Route::get('/admin_cat_list', [CategoryController::class, 'cat_list']);
Route::get('/admin_cat_add', [CategoryController::class, 'cat_add']);
Route::POST('/admin_cat_add_store', [CategoryController::class, 'cat_add_srore']);

Route::get('/admin_cat_edit/{id}', [CategoryController::class, 'cat_edit']);
Route::POST('/admin_cat_edit_update', [CategoryController::class, 'cat_edit_update']);

Route::get('/delete/{id}', [CategoryController::class, 'cat_deleted']);

    
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');