<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtamaController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\ProfileController;

// Route::get('/', function () {
//     return view('utama-index');
// });

Route::get('/', [UtamaController::class, 'index'])->name('home');
Route::get('/pencapaian', [UtamaController::class, 'pencapaian'])->name('pencapaian.ipr');
Route::get('/tentang', [UtamaController::class, 'tentang'])->name('tentang.ipr');

Route::resource('permohonan', PermohonanController::class);
Route::get('/get-daerah/{negeri}', [PermohonanController::class, 'getDaerah']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
