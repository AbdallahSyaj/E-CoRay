<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/lara', function () {
    return view('welcome');
})->name('lara');

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/addblog', [HomeController::class,'create'])->name('create.blog');
Route::post('/addblog', [HomeController::class,'add'])->name('add.blog');


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
