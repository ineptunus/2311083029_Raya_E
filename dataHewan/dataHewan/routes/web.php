<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HewanController;

// Redirect dari root ke /hewan
Route::get('/', function () {
    return redirect()->route('hewan.index');
});

// Resource route untuk hewan (index, create, store, show, edit, update, destroy)
Route::resource('hewan', HewanController::class);

// Tambahan route untuk fitur soft delete:
Route::get('/hewan-deleted', [HewanController::class, 'deleted'])->name('hewan.riwayat'); // Lihat hewan yang terhapus
Route::post('/hewan/{id}/restore', [HewanController::class, 'restore'])->name('hewan.restore'); // Restore data yang dihapus
Route::delete('/hewan/force-delete/{id}', [HewanController::class, 'forceDelete'])->name('hewan.forceDelete'); // Hapus permanen
