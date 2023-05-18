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

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index']);
    Route::get('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'create']);
    Route::post('/add-category', [App\Http\Controllers\Admin\CategoryController::class, 'store']);
    Route::get('/edit-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit']);
    Route::put('/update-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update']);
    Route::get('/delete-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete']);
    Route::get('/view-category/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'view']);

    Route::get('blogs', [App\Http\Controllers\Admin\PostController::class, 'index'])->name('blogs.index');
    Route::get('blogs/create', [App\Http\Controllers\Admin\PostController::class, 'create'])->name('blogs.create');
    Route::post('blogs', [App\Http\Controllers\Admin\PostController::class, 'store'])->name('blogs.store');
    Route::delete('/blogs/{id}', [App\Http\Controllers\Admin\PostController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blogs/{id}', [App\Http\Controllers\Admin\PostController::class, 'view'])->name('blogs.show');
    Route::get('/blogs/{id}/edit', [App\Http\Controllers\Admin\PostController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [App\Http\Controllers\Admin\PostController::class, 'update'])->name('blogs.update');
});

Route::get('/blogs', [App\Http\Controllers\BlogController::class, 'index'])->name('users.index');
Route::get('/blogs/{id}', [App\Http\Controllers\BlogController::class, 'view'])->name('users.show');

Route::post('/comments', [App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');
Route::delete('/comments/{id}', [App\Http\Controllers\CommentController::class, 'destroy'])->name('comments.destroy');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
