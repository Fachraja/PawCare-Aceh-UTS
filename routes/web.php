<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CatController;
use App\Http\Controllers\EntrustmentController;
use App\Http\Controllers\ShelterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // =========================
    // DATA KUCING
    // =========================
    Route::resource('cats', CatController::class);

    // =========================
    // ADOPSI KUCING
    // =========================
    Route::post(
        '/cats/{cat}/adopt',
        [CatController::class, 'adopt']
    )->name('cats.adopt');

    // =========================
    // PENITIPAN KUCING
    // =========================
    Route::resource('entrustments', EntrustmentController::class)
        ->only(['index', 'create', 'store']);

    // =========================
    // LOKASI PENAMPUNGAN
    // =========================
    Route::get(
        '/shelters',
        [ShelterController::class, 'index']
    )->name('shelters.index');

    // =========================
    // PROFILE
    // =========================
    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

require __DIR__.'/auth.php';