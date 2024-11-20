<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispetController;
use App\Http\Controllers\VoditeliController;
use App\Http\Controllers\TovarController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\AvtoController;
use App\Http\Controllers\MarhController;

Route::get('/dispet', [DispetController::class, 'index'])->name('dispet.index');
Route::post('/dispet', [DispetController::class, 'store'])->name('dispet.store');
Route::get('/dispet/{id_avto}/view', [DispetController::class, 'view'])->name('dispet.view');

Route::get('/garage', [GarageController::class, 'index'])->name('garage.index');
Route::post('/garage', [GarageController::class, 'store'])->name('garage.store');
Route::get('/garage/{id}/view', [GarageController::class, 'view'])->name('garage.view');

Route::get('/tovar', [TovarController::class, 'index'])->name('tovar.index');
Route::post('/tovar', [TovarController::class, 'store'])->name('tovar.store');
Route::get('/tovar/{id}/view', [TovarController::class, 'view'])->name('tovar.view');

Route::get('/voditeli', [VoditeliController::class, 'index'])->name('voditeli.index');
Route::post('/voditeli', [VoditeliController::class, 'store'])->name('voditeli.store');
Route::get('/voditeli/{id}/view', [VoditeliController::class, 'view'])->name('voditeli.view');

Route::get('/marh', [MarhController::class, 'index'])->name('marh.index');
Route::post('/marh', [MarhController::class, 'store'])->name('marh.store');
Route::get('/marh/{id}/view', [MarhController::class, 'view'])->name('marh.view');

Route::get('/avto', [AvtoController::class, 'index'])->name('avto.index');
Route::post('/avto', [AvtoController::class, 'store'])->name('avto.store');
Route::get('/avto/{id_avto}/view', [AvtoController::class, 'view'])->name('avto.view');

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/table', function () {
    return view('table');
})->name('table');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
