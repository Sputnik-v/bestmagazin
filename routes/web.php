<?php

use App\Http\Controllers\home\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('products/{id}', [HomeController::class, 'show'])->name('product');


Route::get('television', [HomeController::class, 'showForCategory'])->name('televisions');

Route::get('boiling', [HomeController::class, 'showForCategory'])->name('boiling');

Route::get('phones', [HomeController::class, 'showForCategory'])->name('phones');

Route::get('vacuums', [HomeController::class, 'showForCategory'])->name('vacuums');

Route::get('refrigerators', [HomeController::class, 'showForCategory'])->name('refrigerators');

Route::get('photographs', [HomeController::class, 'showForCategory'])->name('photographs');

Route::get('headphones', [HomeController::class, 'showForCategory'])->name('headphones');

Route::get('/account', function () {
    return view('account');
})->middleware(['auth', 'verified'])->name('account');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
