<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-category/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{id}',[App\Http\Controllers\Admin\CategoryController::class, 'delete']);

    Route::get('posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('add-post', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('add-post', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('/edit-post/{id}',[App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('/update-post/{id}',[App\Http\Controllers\Admin\PostController::class, 'update']);
    Route::get('/delete-post/{id}',[App\Http\Controllers\Admin\PostController::class, 'delete']);

});

