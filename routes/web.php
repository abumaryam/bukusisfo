<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('index-category',[CategoryController::class,'index'])->name('category.index');
Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/show/{id}',[CategoryController::class,'show'])->name('category.show');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::put('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::delete('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

Route::get('book/index',[BookController::class,'index']);
Route::get('book/show/{id}/{status}',[BookController::class,'show']);

Route::get('/nila-setitik', function () {
    return "Susu Sebelanga";
});

Route::get('/site/about',[SiteController::class,'about']);
Route::get('/site/kontak',[SiteController::class,'kontakKami']);