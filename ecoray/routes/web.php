<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategorieController;

Route::get('/lara', function () {
    return view('welcome');
})->name('lara');

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/search', [BlogController::class, 'search'])->name('blogs.search');
Route::get('/addBlogPage',[BlogController::class,'create'])->name('blogs.create');
Route::post('/addBlog',[BlogController::class,'store'])->name('blogs.store');
Route::get('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
Route::put('/blogsUpdate/{blog}', [BlogController::class, 'update'])->name('blogs.update');
Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('blogs.destroy');



Route::get('/contact',[ContactController::class, 'index'] )->name('contact');
Route::post('/contact',[ContactController::class, 'store'] )->name('contact.store');

Route::get('/categories', [CategorieController::class, 'index'])->name('categories');
Route::get('/showBlogs/{id}', [CategorieController::class, 'show'])->name('categories.show');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
