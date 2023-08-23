<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ScriptController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\AuthorController;

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
    return view('layouts.app');
})->name('home');

Route::resource('/publishers', PublisherController::class);
Route::resource('/scripts', ScriptController::class);

Route::prefix('settings')->group(function () {
    Route::get('/policy', [SettingController::class, 'showPolicy'])->name('settings.policy');
    Route::get('/categories', [SettingController::class, 'showCategories'])->name('settings.categories');
    Route::get('/genres', [SettingController::class, 'showGenres'])->name('settings.genres');
    Route::get('/publishers', [SettingController::class, 'showPublishers'])->name('settings.publishers');
    Route::get('/bindings', [SettingController::class, 'showBindings'])->name('settings.bindings');
    Route::get('/formats', [SettingController::class, 'showFormats'])->name('settings.formats');
    Route::get('/scripts', [SettingController::class, 'showScripts'])->name('settings.scripts');
});

Route::group(['middleware'=>'auth'], function(){
    Route::resource('/authors', AuthorController::class);
});

