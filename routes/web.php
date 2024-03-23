<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminPostController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/posts', [PostController::class, 'index'])->name('posts');

Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::get('/posts', [AdminPostController::class, 'index'])->name('posts.index');
    Route::get('/posts/{id}', [AdminPostController::class, 'show'])->name('posts.show');
    Route::get('/posts/create', [AdminPostController::class, 'create'])->name('posts.create');
    Route::post('posts/create', [AdminPostController::class, 'store'])->name('posts.store');
    Route::post('/upload', [AdminPostController::class, 'ck_upload'])->name('ck.upload');
});
