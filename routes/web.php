<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('raffle/upload', function(Request $request) {
    $file = $request->file('raffle_file');

    // Separate the entries to array.
    $contestants = explode("\n", $file->getContent());
    $contestants = array_filter($contestants); // Remove empty lines.

    // Choose random 5 people.
    $winners_array = array_rand($contestants, 5);

    // Get the names of the 5 people.
    $winners = [];
    foreach ($winners_array as $winner) {
        $winners[] = $contestants[$winner];
    }

    // Display the winners.
    return view('winners', compact('winners'));
})->name('raffle.upload');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
