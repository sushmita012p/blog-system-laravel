<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\commentController;

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

Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/add-category', [CategoryController::class, 'create']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::post('/add-category', [CategoryController::class, 'store']);
    Route::put('/update-category/{id}', [CategoryController::class, 'update']);
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit']);
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete']);
    Route::get('/view-category/{id}', [CategoryController::class, 'view']);

    Route::get('blogs/create', [PostController::class, 'create'])->name('blogs.create');
    Route::get('blogs', [PostController::class, 'index'])->name('blogs.index');
    Route::post('blogs', [PostController::class, 'store'])->name('blogs.store');
    Route::delete('/blogs/{id}', [PostController::class, 'destroy'])->name('blogs.destroy');
    Route::get('/blogs/{id}', [PostController::class, 'view'])->name('blogs.show');
    Route::get('/blogs/{id}/edit', [PostController::class, 'edit'])->name('blogs.edit');
    Route::put('/blogs/{id}', [PostController::class, 'update'])->name('blogs.update');
});

    Route::get('/blogs', [BlogController::class, 'index'])->name('users.index');
    Route::get('/blogs/{id}', [BlogController::class, 'view'])->name('users.show');

    Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::delete('/comments/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');
    Auth::routes();

    Route::get('/home', [HomeController::class, 'index'])->name('home');


    
