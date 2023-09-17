<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\SizeController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/authors', AuthorController::class);


    // SETTINGS
    Route::get('/policy', [SettingsController::class, 'index'])->name('policy.index');
    Route::get('/settings', [SettingsController::class, 'index'])->name('policy.index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/genres', GenreController::class);
    Route::resource('/publishers', PublisherController::class);
    Route::resource('/sizes', SizeController::class);
    Route::resource('/scripts', ScriptController::class);

});

require __DIR__.'/auth.php';
