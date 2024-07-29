<?php

use App\Http\Controllers\Admin\RegisteredAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});

require __DIR__.'/auth.php';



Route::get('/user', [ContadorController::class, 'UserIndex'])->name('user');
Route::get('/user/contador', [ContadorController::class, 'ContadorIndex'])->name('contador');
Route::get('/user/contador/agregar', [ContadorController::class, 'AgregarIndex'])->name('contador');

Route::middleware('guest:admin')->group(function () {
    Route::get('admin/register', [RegisteredAdminController::class, 'create'])
                ->name('admin.register');

    Route::post('admin/register', [RegisteredAdminController::class, 'store']);
});
