<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class,'home'])->name('home');
Route::get('/about-chetan-overseas', [FrontendController::class,'about_us'])->name('about_us');
Route::get('/contact-chetan-overseas', [FrontendController::class,'contact_us'])->name('contact_us');
Route::get('/{slug}', [FrontendController::class,'product'])->name('product');
Route::get('/brand/{slug}/{brand_name}', [FrontendController::class,'brandProduct'])->name('brand_products');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
