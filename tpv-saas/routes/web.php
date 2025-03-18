<?php
// filepath: routes/web.php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConfigController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/config', [ConfigController::class, 'showConfigForm'])->name('config');
Route::post('/config', [ConfigController::class, 'saveConfig'])->name('save-config');

