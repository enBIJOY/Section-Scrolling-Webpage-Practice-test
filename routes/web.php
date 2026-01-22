<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('website.index');
});

Route::get('locale/{locale}', function($locale){
    Session(['locale'=>$locale]);
    return back();
})->name('locale');

Route::get('/crud/home', function () {
    return view('crud.home'); // resources/views/crud/home.blade.php
})->name('crud.home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
// Route::get('home', [ProductController::class, 'home'])->name('home');
Route::post('/create', [ProductController::class, 'create'])->name('create');
Route::get('/show', [ProductController::class, 'show'])->name('show');
Route::get('edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('delete/{id}', [ProductController::class, 'productDelete'])->name('product.Delete');
Route::post('/newsletter', [ProductController::class, 'newsletter'])->name('newsletter');





