<?php

use App\Http\Controllers\ContestController;
use App\Http\Controllers\ProfileController;
use App\Models\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('contests.index');
});

Route::get('/dashboard', function () {
    $totalCount = Entry::count();
    $lastEntry = Entry::latest()->first();
    $correctEntries = Entry::where('answer', 2)->count();
    return view('dashboard', compact('totalCount', 'lastEntry', 'correctEntries'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('2025-founding-day-contest', [ContestController::class, 'index'])->name('contests.index');
Route::post('2025-founding-day-contest/enter', [ContestController::class, 'enter'])->name('contests.enter');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('2025-founding-day-contest/draw', [ContestController::class, 'draw'])->name('contests.draw');
    Route::get('2025-founding-day-contest/download', [ContestController::class, 'download'])->name('contests.download');
});

require __DIR__.'/auth.php';
